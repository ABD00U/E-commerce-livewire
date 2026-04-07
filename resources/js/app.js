import "./bootstrap";
import Alpine from "alpinejs";

// 1️⃣ Store FIRST — before anything
Alpine.store("auth", {
    isAuthenticated: false,
    showAuthModal: false,

    redirect(url) {
        if (this.isAuthenticated) {
            window.location.href = url;
        } else {
            this.showAuthModal = true;
        }
    },
});

// 2️⃣ Expose globally
window.Alpine = Alpine;

// 3️⃣ NO Alpine.start() — Livewire v3 handles it ✅
