// External Dependencies
import React, { Component } from 'react';
// Internal Dependencies
import './animated-text.css';


class AnimatedText extends Component {

  static slug = 'nodm_animated_text';
  
  render() {
    const content = this.props['content'];
    const effect = this.props['effect']; 
    return (
      <div className={'nodm-animated-text '+effect}> {content()}</div>
      );
  }
}

export default AnimatedText;
