/**
 * Auto-register Alpine.js components using camelCase identifiers.
 *
 * Converts file paths to camelCase and registers each via Alpine.data().
 *
 * ┌ Example Directory Structure:
 * └── components/
 *     ├── modal.js                  -> x-data="modal"
 *     ├── popover.js                  -> x-data="popover"
 *     ├── menu-dropdown.js          -> x-data="menuDropdown"
 *     └── sidebar/mobile-panel.js   -> x-data="sidebarMobilePanel"
 *
 * Notes:
 * - Each component file must export a default function.
 * - Naming assumes camelCase usage in HTML/Blade (e.g., x-data="sidebarMobilePanel").
 *
 * Usage (typically in app.js):
 *   import registerComponents from './alpine/components'
 *   registerComponents(Alpine)
 */

export default function registerComponents(Alpine) {
    const modules = import.meta.glob('./**/*.js', { eager: true });

    Object.entries(modules).forEach(([path, definition]) => {
        // Convert './sidebar/mobile-panel.js' → 'sidebarMobilePanel'
        const camelName = path
            .replace(/^\.\/|\.js$/g, '') // Remove './' and '.js'
            .split('/')
            .map((segment, i) =>
                i === 0
                    ? segment.replace(/-([a-z])/g, (_, c) => c.toUpperCase()) // kebab-case to camelCase
                    : segment.charAt(0).toUpperCase() + segment.slice(1)
            )
            .join('')
            .replace(/[^a-zA-Z0-9]/g, ''); // Remove non-alphanumerics just in case

        if (typeof definition.default === 'function') {
            Alpine.data(camelName, definition.default);
        } else {
            console.warn(
                `[Alpine] Component "${camelName}" must export a default function.`
            );
        }
    });
}
