(() => {
    const header = document.querySelector("#header");
    if (!header) return;

    const menuToggle = header.querySelector(".menu-toggle");
    const navigation = header.querySelector("#navigation");
    const residencesItem = header.querySelector(".residences-item");
    const residencesToggle = header.querySelector(".residences-toggle");
    const desktopQuery = window.matchMedia("(min-width: 768px)");

    const setExpanded = (button, expanded) => {
        button?.setAttribute("aria-expanded", String(expanded));
    };

    const closeResidences = () => setExpanded(residencesToggle, false);
    const closeNavigation = () => {
        setExpanded(menuToggle, false);
        closeResidences();
    };

    const updateScrollState = () => {
        header.classList.toggle("is-scrolled", window.scrollY > 24);
    };

    updateScrollState();
    window.addEventListener("scroll", updateScrollState, { passive: true });

    menuToggle?.addEventListener("click", () => {
        const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
        setExpanded(menuToggle, !isExpanded);
        menuToggle.setAttribute("aria-label", isExpanded ? "Abrir menu de navegação" : "Fechar menu de navegação");
        if (isExpanded) closeResidences();
    });

    residencesToggle?.addEventListener("click", () => {
        const isExpanded = residencesToggle.getAttribute("aria-expanded") === "true";
        setExpanded(residencesToggle, !isExpanded);
    });

    residencesItem?.addEventListener("pointerenter", (event) => {
        if (desktopQuery.matches && event.pointerType === "mouse") {
            setExpanded(residencesToggle, true);
        }
    });

    residencesItem?.addEventListener("pointerleave", (event) => {
        if (desktopQuery.matches && event.pointerType === "mouse" && !residencesItem.contains(document.activeElement)) {
            closeResidences();
        }
    });

    residencesItem?.addEventListener("focusout", (event) => {
        if (!residencesItem.contains(event.relatedTarget)) closeResidences();
    });

    navigation?.addEventListener("click", (event) => {
        if (event.target.closest("a")) closeNavigation();
    });

    document.addEventListener("keydown", (event) => {
        if (event.key !== "Escape") return;

        if (residencesToggle?.getAttribute("aria-expanded") === "true") {
            closeResidences();
            residencesToggle.focus();
        } else if (menuToggle?.getAttribute("aria-expanded") === "true") {
            closeNavigation();
            menuToggle.focus();
        }
    });

    document.addEventListener("click", (event) => {
        if (!header.contains(event.target)) closeNavigation();
    });

    desktopQuery.addEventListener("change", closeNavigation);
})();
