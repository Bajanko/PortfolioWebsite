import fs from 'fs';
import path from 'path';

const PAGES_DIR = './src/pages';
const COMPONENTS_DIR = './src/components';
const OUTPUT_DIR = '.';

export function compileTemplates({ quiet = false } = {}) {
    if (!quiet) console.log('Compiling HTML templates...');

    const layout = fs.readFileSync(path.join(COMPONENTS_DIR, 'layout.html'), 'utf8');
    const navbarRaw = fs.readFileSync(path.join(COMPONENTS_DIR, 'navbar.html'), 'utf8');
    const toggle = fs.readFileSync(path.join(COMPONENTS_DIR, 'toggle.html'), 'utf8');
    const footer = fs.readFileSync(path.join(COMPONENTS_DIR, 'footer.html'), 'utf8');
    const scripts = fs.readFileSync(path.join(COMPONENTS_DIR, 'scripts.html'), 'utf8');

    const navbar = navbarRaw.replace('{{toggle}}', toggle);

    if (!fs.existsSync(PAGES_DIR)) {
        throw new Error(`Pages directory ${PAGES_DIR} does not exist`);
    }

    const pages = fs.readdirSync(PAGES_DIR).filter(file => file.endsWith('.html'));

    for (const pageFile of pages) {
        const pagePath = path.join(PAGES_DIR, pageFile);
        let pageContent = fs.readFileSync(pagePath, 'utf8');

        const titleMatch = pageContent.match(/<!--\s*title:\s*(.*?)\s*-->/);
        const descMatch = pageContent.match(/<!--\s*description:\s*(.*?)\s*-->/);

        const title = titleMatch ? titleMatch[1] : 'Bajanko Jaiteh - Portfolio';
        const description = descMatch ? descMatch[1] : 'Software Developer Portfolio';

        const compiled = layout
            .replace('{{title}}', title)
            .replace('{{description}}', description)
            .replace('{{navbar}}', navbar)
            .replace('{{footer}}', footer)
            .replace('{{scripts}}', scripts)
            .replace('{{content}}', pageContent);

        fs.writeFileSync(path.join(OUTPUT_DIR, pageFile), compiled);

        if (!quiet) console.log(`Compiled: ${pageFile}`);
    }

    if (!quiet) console.log('Template compilation completed.');
}

function isTemplateSource(file) {
    return file.includes(`${path.sep}src${path.sep}pages${path.sep}`)
        || file.includes(`${path.sep}src${path.sep}components${path.sep}`);
}

export function templatePlugin() {
    const watchDirs = [
        path.resolve('src/pages'),
        path.resolve('src/components'),
    ];

    const recompile = (server) => {
        try {
            compileTemplates({ quiet: true });
            if (server) {
                server.ws.send({ type: 'full-reload' });
            }
        } catch (error) {
            console.error('Template compilation failed:', error.message);
        }
    };

    return {
        name: 'template-compiler',
        buildStart() {
            compileTemplates();
        },
        configureServer(server) {
            watchDirs.forEach(dir => server.watcher.add(dir));

            const onChange = (file) => {
                if (isTemplateSource(file)) {
                    console.log(`[templates] ${path.basename(file)} changed, recompiling...`);
                    recompile(server);
                }
            };

            server.watcher.on('change', onChange);
            server.watcher.on('add', onChange);
            server.watcher.on('unlink', onChange);
        },
    };
}

if (process.argv[1]?.endsWith('compile-templates.js')) {
    try {
        compileTemplates();
    } catch (error) {
        console.error('Error during template compilation:', error);
        process.exit(1);
    }
}
