import "./bootstrap";
import Alpine from "alpinejs";

// resources/js/app.js
window.Alpine = Alpine;
Alpine.start();

Alpine.store("auth", {
    isAuthenticated: false, // will be set from Blade
    showAuthModal: false,

    redirect(url) {
        if (this.isAuthenticated) {
            window.location.href = url;
        } else {
            this.showAuthModal = true;
        }
    },
});
