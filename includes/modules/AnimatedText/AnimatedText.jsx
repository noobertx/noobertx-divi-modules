// External Dependencies
import React, { Component } from 'react';
// Internal Dependencies
import './animated-text.css';


class AnimatedText extends Component {

  static slug = 'nodm_animated_text';
  
  render() {
  
    return (<div class="nodm-animated-text effect-1">					
					<h1 class="ml1 text-center">
  						<span class="text-wrapper">
    						<span class="line line1"></span>
    						<span class="letters">THURSDAY</span>
    						<span class="line line2"></span>
  						</span>
					</h1>
				</div>);
    
  }
}

export default AnimatedText;
