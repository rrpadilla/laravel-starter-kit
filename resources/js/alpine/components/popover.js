import Alpine from 'alpinejs'

export default () => ({
    init() {
        // Alpine root behavior
        Alpine.bind(this.$el, {
            'x-data'() {
                return {
                    trigger: null,
                    menu: null,
                    expanded: false,

                    expand() {
                        this.expanded = true;
                    },

                    close(focus = true) {
                        this.expanded = false;
                        if (
                            focus &&
                            document.activeElement !== this.trigger
                        ) {
                            setTimeout(() => this.trigger?.focus(), 0);
                        }
                    },

                    toggle() {
                        this.expanded ? this.close() : this.expand();
                    },
                };
            },

            'x-id'() {
                return ['popover_trigger', 'popover_menu'];
            },

            '@keydown.escape.stop.prevent'() {
                this.close();
            },

            'x-init'() {
                this.trigger = this.$el.querySelector('[data-popover-trigger]');
                this.menu = this.$el.querySelector('[data-popover-menu]');
            },
        });

        // Bind trigger if found
        const trigger = this.$el.querySelector('[data-popover-trigger]');
        if (trigger) {
            Alpine.bind(trigger, {
                '@click'() {
                    this.$data.toggle();
                },
                ':id'() {
                    return this.$id('popover_trigger');
                },
                ':aria-expanded'() {
                    return this.$data.expanded;
                },
                ':aria-controls'() {
                    return this.$data.expanded ? this.$id('popover_menu') : null;
                },
            });
        }

        // Bind menu if found
        const menu = this.$el.querySelector('[data-popover-menu]');
        if (menu) {
            Alpine.bind(menu, {
                ':id'() {
                    return this.$id('popover_menu');
                },
                'x-show'() {
                    return this.$data.expanded;
                },
                '@mousedown.window'($event) {
                    if (
                        this.$data.expanded &&
                        !this.$data.trigger?.contains($event.target) &&
                        !this.$el.contains($event.target)
                    ) {
                        this.$data.close();
                    }
                },
            });
        }
    },
});
