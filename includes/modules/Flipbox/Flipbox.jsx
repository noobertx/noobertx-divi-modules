// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './flipbox.css';


class Flipbox extends Component {

  static slug = 'nodm_flipbox';

  render() {
    const FrontContent = this.props['front-content'];
    const BackContent = this.props['back-content'];
    return (
      <div class="flip-box">
			  <div class="flip-box-inner">
          <div  class="flip-box-front" 
                dangerouslySetInnerHTML={{__html: FrontContent}} 
                style={{background: this.props['frontview_background_color']}}>			      
			    </div>
          <div  class="flip-box-back" 
                dangerouslySetInnerHTML={{__html: BackContent}}
                style={{background: this.props['backview_background_color']}}>			   	  
			    </div>
			  </div>
			</div>
    );
  }
}

export default Flipbox;
