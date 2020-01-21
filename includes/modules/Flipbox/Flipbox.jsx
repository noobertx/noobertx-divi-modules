// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './flipbox.css';


class Flipbox extends Component {

  static slug = 'nodm_flipbox';

  render() {
    const Content = this.props.content;
    const FrontContent = this.props.frontcontent;
    const BackContent = this.props.backcontent;

    console.log(this.props);
    console.log(Content);

    // return (
    //   <h1>
    //     <Content/>
    //   </h1> 
    // );

    return (
      <div class="flip-box">
			  <div class="flip-box-inner">
			    <div class="flip-box-front">
			      FrontContent
			    </div>
			    <div class="flip-box-back">
			   	  BackContent
			    </div>
			  </div>
			</div>
    );
  }
}

export default Flipbox;
