export default () => ({
    open: false,
        focusedIndex: null,
        menuItems: [],

        init() {
            this.$nextTick(() => {
                this.menuItems = Array.from(
                    this.$el.querySelectorAll(
                        '[role=menuitem]:not([disabled]),[role=menuitemcheckbox]:not([disabled]),[role=menuitemradio]:not([disabled])'
                    )
                );
            });
        },
        focusMenuitem() {
            if (this.menuItems.length === 0) return;

            if (this.focusedIndex >= this.menuItems.length) {
                this.focusedIndex = this.menuItems.length - 1;
            } else if (this.focusedIndex < 0 || this.focusedIndex === null) {
                this.focusedIndex = 0;
            }
            this.menuItems.forEach((item) => item.blur());
            this.menuItems[this.focusedIndex].focus();
        },
        moveMenuitemFocus(delta) {
            if (this.menuItems.length === 0) return;

            let wasOpen = this.open;
            if (!this.open) {
                this.open = true;
                this.focusedIndex = 0;
            } else {
                this.focusedIndex =
                    this.focusedIndex === null ? 0 : this.focusedIndex + delta;
            }

            if (wasOpen) {
                this.focusMenuitem();
            } else {
                setTimeout(() => this.focusMenuitem(), 50);
            }
        },
        handleMenuitemClick(event) {
            const menuitem = event.target.closest(
                '[role=menuitem],[role=menuitemcheckbox],[role=menuitemradio]'
            );
            if (
                menuitem &&
                menuitem.getAttribute('aria-disabled') !== 'true' &&
                !menuitem.disabled
            ) {
                this.$nextTick(() => {
                    this.$refs.trigger.focus();
                    this.open = false;
                });
            }
        },
        handleMenuitemMousemove(event) {
            const menuitem = event.target.closest(
                '[role=menuitem],[role=menuitemcheckbox],[role=menuitemradio]'
            );
            if (
                menuitem &&
                menuitem.getAttribute('aria-disabled') !== 'true' &&
                !menuitem.disabled
            ) {
                this.focusedIndex = this.menuItems.indexOf(menuitem);
                this.focusMenuitem();
            }
        },

        $trigger: {
            '@click'() {
                this.open = !this.open;
            },
            '@keydown.escape.prevent'() {
                this.open = false;
                this.$refs.trigger.focus();
            },
            '@keydown.down.prevent'() {
                this.moveMenuitemFocus(+1);
            },
            '@keydown.up.prevent'() {
                this.moveMenuitemFocus(-1);
            },
            '@keydown.home.prevent'() {
                this.focusMenuitem(0);
            },
            '@keydown.end.prevent'() {
                this.focusMenuitem(this.menuItems.length - 1);
            },
            '@keydown.enter.prevent'() {
                this.open = !this.open;
            },
            ':aria-expanded'() {
                return this.open;
            },
            'x-ref': 'trigger',
        },
        $content: {
            '@click'(e) {
                this.handleMenuitemClick(e);
            },
            '@keydown.escape.prevent'() {
                this.open = false;
                this.$refs.trigger.focus();
            },
            '@keydown.down.prevent'() {
                this.moveMenuitemFocus(+1);
            },
            '@keydown.up.prevent'() {
                this.moveMenuitemFocus(-1);
            },
            '@keydown.home.prevent'() {
                this.focusMenuitem(0);
            },
            '@keydown.end.prevent'() {
                this.focusMenuitem(this.menuItems.length - 1);
            },
            '@mouseover'(e) {
                this.handleMenuitemMousemove(e);
            },
            ':aria-hidden'() {
                return !this.open;
            },
            'x-cloak': '',
        },
});
