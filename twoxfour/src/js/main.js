import "../css/styles.scss";

import $ from "jquery";
import About from "./pages/about";
import Home from "./pages/home";
import Work from "./pages/work";
import Carousel from "./modules/carousel";
import Video from "./modules/video";

export default class Main {
  constructor() {
    // classMapping associates js Class to string value from data-js-module attribute on Html element(s)
    this.classMapping = {
      home: Home,
      carousel: Carousel,
      video: Video,
      work: Work,
      about: About,
    };
  }

  // Run all initialization things
  init() {
    this.createModules();
    Main.setupPage();
  }

  createModules() {
    $("[data-js-module]").each((index, element) => {
      let modules = $(element).attr("data-js-module");
      modules = modules.trim().split(" ");

      // For any modules found on the page ...
      modules.forEach(m => {
        try {
          // Instantiate their associated class
          const mod = new this.classMapping[m](element);
        } catch (err) {
          // console.log(err);
        }
      });
    });
  }

  static setupPage() {}
}

const main = new Main();
main.init();
