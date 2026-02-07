import './bootstrap';
import Cursorly from 'cursorly.js';

import { tsParticles } from "@tsparticles/engine";
import { loadSlim } from "@tsparticles/slim";

const options = {
  detectRetina: true, 
  background: { color: "transparent" },
  particles: {
    number: {
      value: 400,
      density: {
        enable: true,
        area: 800
      }
    },
    color: {
      value: ["#4cc9f0", "#4361ee", "#3a0ca3"]
    },

    shape: {
      type: "circle"
    },

    size: {
      value: 2
    },

    move: {
      enable: true,
      speed: 0.5,
      path: {
        enable: true,
        delay: {
          value: 0
        },
        generator: "perlinNoise"
      },
      outModes: {
        default: "bounce"
      }
    },

    opacity: {
      value: 0.5
    },

    links: {
      enable: true,
      distance: 120,
      opacity: 0.3,
      width: 1,
      color: "#6c8cff"
    }
  },
};

document.addEventListener("DOMContentLoaded", async () => {
  await loadSlim(tsParticles);
  await tsParticles.load({
    id: "tsparticles",
    options: options 
  });
});

const cursor = Cursorly.init({
  cursor: 0,
  effect: { name: "trail", color: "rainbow" }
});

document.querySelectorAll('.remove-cursor').forEach(el => {

  el.addEventListener('mouseenter', () => {
    cursor.enable();
  }); 

  el.addEventListener('mouseleave', () => {
    cursor.disable();
  });
});

document.querySelectorAll('.noef, .btn').forEach(el => {

  el.addEventListener('mouseenter', () => {
    cursor.setIcon(23);
  }); 

  el.addEventListener('mouseleave', () => {
    cursor.setIcon(0);
  });
});

