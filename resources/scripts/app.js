import React from "react";
import {domReady} from '@roots/sage/client';
import MobileNavigation from "@scripts/libs/MobileNavigation";
import StickyFooter from "@scripts/libs/StickyFooter";
import Slider from "@scripts/libs/Slider";
import CategoriesSection from "@scripts/libs/CategoriesSection";
import ProjectSlider from "@scripts/libs/ProjectSlider";
import LicensesSlider from "@scripts/libs/LicensesSlider";
import AcknowledgmentsSlider from "@scripts/libs/AcknowledgmentsSlider";
import Choices from "choices.js";
import ImageSlider from "@scripts/libs/ImageSlider";
import VideoSlider from "@scripts/libs/VideoSlider";
import Modal from "@scripts/libs/Modal";
import VideoSliderBlock from "@scripts/libs/VideoSliderBlock";
import Navigation from "@scripts/libs/Navigation";
import CalculateForm from "@scripts/forms/CalculateForm";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  const mobileNavigation = new MobileNavigation('#open-mobile-menu', '.banner .close-modal')
  mobileNavigation.register();

  const nav = new Navigation('.banner')
  nav.register();

  const stickFooter = new StickyFooter('.sticky-footer')
  stickFooter.register();

  const slider = new Slider('.slider-block .swiper')
  slider.register();

  const categoriesSection = new CategoriesSection('.categories-block');
  categoriesSection.register();

  const projectSlider = new ProjectSlider('.single-project__slider')
  projectSlider.register();

  const licensesSlider = new LicensesSlider('.licenses-slider .swiper')
  licensesSlider.register();

  const acknowledgmentsSlider = new AcknowledgmentsSlider('.acknowledgments-slider .swiper')
  acknowledgmentsSlider.register();

  const imageSlider = new ImageSlider('.projects-slider-block .swiper')
  imageSlider.register();

  const videoSlider = new VideoSlider('.home-video-slider-block .swiper');
  videoSlider.register()

  const modal = new Modal('.modal', 'data-trigger')
  modal.register();

  const videoSliderBlock = new VideoSliderBlock('.video-slider-block .swiper')
  videoSliderBlock.register();


  document.querySelectorAll('.vid').forEach(x => x.play())

  document.querySelectorAll('iframe').forEach(x => {
    x.setAttribute('loading', 'lazy')
  })

  document.querySelectorAll('.input-group.select select').forEach(x => {
    new Choices(x, {
      searchEnabled: x.getAttribute('data-search')?? false,
      classNames: {
        flippedState: null,
      }
    })
  })

  const cf = new CalculateForm('#calculate-modal', ['name', 'phone', 'district', 'width', 'length', 'height', 'company'])
  cf.register();
  const sf = new CalculateForm('#second-calculate-modal', ['name', 'phone', 'district', 'company'])
  sf.register();

};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);

import.meta.webpackHot?.accept(main);
