// External Dependencies
import React, { Component } from 'react';
import anime from 'animejs/lib/anime.es.js';
// Internal Dependencies
import './animated-text.css';


class AnimatedText extends Component {

  static slug = 'nodm_animated_text';
  renderAnime(){
    var textWrapper = document.querySelector('.ml1 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
        loop: true
      })
      .add({
        targets: '.ml1 .letter',
        scale: [0.3, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 600,
        delay: (el, i) => 70 * (i + 1)
      }).add({
        targets: '.ml1 .line',
        scaleX: [0, 1],
        opacity: [0.5, 1],
        easing: "easeOutExpo",
        duration: 700,
        offset: '-=875',
        delay: (el, i, l) => 80 * (l - i)
      }).add({
        targets: '.ml1',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
  }
  render() {
    this->renderAnime();
    return (
      <div className={'flip-box '+flipDirection}>
        <h1>Animated Text Here</h1>
			</div>
    );
    
  }
}

export default AnimatedText;
