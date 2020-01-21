// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Flipbox extends Component {

  static slug = 'nodm_flipbox';

  render() {
    const Content = this.props.content;

    return (
      <h1>
        <Content/>
      </h1>
    );
  }
}

export default Flipbox;
