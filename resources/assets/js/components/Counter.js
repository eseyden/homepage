import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Counter extends Component {
    constructor(props) {
        super(props);

        this.state = {
            count: 0
        };
    }

    componentDidMount() {
        let apiUrl = process.env.MIX_API_URL + '/count';
        axios.get(apiUrl).then(res => { this.setState({ count:res.data }); } );
    }

    render() {
        let classes = (this.state.count === 0) ? 'counter hide': 'counter';
        return (
            <span className={classes}>{ this.state.count }</span>
        );
    }
}

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}