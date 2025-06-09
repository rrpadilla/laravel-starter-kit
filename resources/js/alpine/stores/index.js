/**
 * Auto-register Alpine.js stores from this folder and subfolders.
 *
 * Converts filenames and folders to camelCase and registers them using Alpine.store().
 *
 * ┌ Example Directory Structure:
 * └── stores/
 *     ├── user.js                 -> $store.user
 *     ├── auth/session.js         -> $store.authSession
 *     └── theme/darkMode.js       -> $store.themeDarkMode
 *
 * Notes:
 * - Each file must export either:
 *     a) a plain object, or
 *     b) a default function returning a store object
 * - If the store has an `init()` method, it will be called automatically.
 *
 * Usage (typically in app.js):
 *   import registerStores from './alpine/stores'
 *   registerStores(Alpine)
 */

export default function registerStores(Alpine) {
    const modules = import.meta.glob('./**/*.js', { eager: true });

    Object.entries(modules).forEach(([path, definition]) => {
        // Convert path to camelCase: './theme/darkMode.js' => 'themeDarkMode'
        const camelName = path
            .replace(/^\.\/|\.js$/g, '') // Remove './' prefix and '.js' suffix
            .split('/')
            .map((segment, i) =>
                i === 0
                    ? segment
                    : segment.charAt(0).toUpperCase() + segment.slice(1)
            )
            .join('');

        // Get store definition: either the exported object or the result of a factory function
        const store =
            typeof definition.default === 'function'
                ? definition.default(Alpine)
                : definition.default;

        Alpine.store(camelName, store);

        // Auto-initialize the store if it has an init() method
        if (typeof store.init === 'function') {
            store.init();
        }
    });
}
