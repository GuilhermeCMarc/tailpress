// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu");
  let close_btn = document.querySelector("#menu-close");
  console.log(close_btn);
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      close_btn.classList.toggle("hidden");
    });
  document.querySelector("#menu-close").addEventListener("click", function (e) {
    e.preventDefault();
    main_navigation.classList.toggle("hidden");
    close_btn.classList.toggle("hidden");
  });
});
