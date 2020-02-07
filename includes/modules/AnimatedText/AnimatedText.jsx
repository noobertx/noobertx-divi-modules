// External Dependencies
import React, { Component } from 'react';
// Internal Dependencies
import './animated-text.css';


class AnimatedText extends Component {

  static slug = 'nodm_animated_text';
  
  render() {
  
    return (
     <div id="mpc_animated_text-965e3b4b96c8a1a" class="mpc-animated-text-wrap mpc-typography--default mpc-transition mpc-style--rotator mpc-loaded mpc-inited" data-options="" style="opacity: 1;"><div class="mpc-animated-text__side mpc-animated-text__before mpc-typography--default">This is a default animated text:</div><div class="mpc-animated-text" style="height: 37px;"><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">Second line.</span></div><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">Third line.</span></div><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">First line.</span></div></div></div>
    );
    
  }
}

export default AnimatedText;
