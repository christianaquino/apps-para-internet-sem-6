const getSection = (section) =>
  fetch(section)
    .then((res) => {
      return res.text();
    })
    .then((text) => {
      document.getElementById("mainContent").innerHTML = text;
      getSecondaySection();
    });

const getSecondaySection = () =>
  fetch("_secondary.html")
    .then((res) => res.text())
    .then((text) => {
      document.getElementById("secondary").innerHTML = text;
    });

const readMore = (e, newsItemId) => {
  const target = document.getElementById(newsItemId);
  target.classList.toggle("news-item-collapsed");
  target.closest(".card").classList.toggle("is-full-desktop");

  if (e.innerHTML === "Leer mas...") {
    e.innerHTML = "Leer menos...";
    // hide other cards
    document.querySelectorAll("div.card:not(.is-full-desktop)").forEach((e) => {
      e.classList.toggle("is-hidden-desktop");
    });
  } else {
    e.innerHTML = "Leer mas...";
    // shows other cards
    document.querySelectorAll("div.is-hidden-desktop").forEach((e) => {
      e.classList.toggle("is-hidden-desktop");
    });
  }
};

const showPassword = (element, targetId) => {
  targetElement = document.getElementById(targetId);
  if (element.checked) {
    targetElement.type = "text";
  } else {
    targetElement.type = "password";
  }
};

document.addEventListener("DOMContentLoaded", () => {
  const $navbarBurgers = Array.prototype.slice.call(
    document.querySelectorAll(".navbar-burger"),
    0
  );

  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach((el) => {
      el.addEventListener("click", () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle("is-active");
        $target.classList.toggle("is-active");
      });
    });
  }
});
