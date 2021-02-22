import React from 'react'
import logo from './logo.svg';
import './App.css';
import Amplify from 'aws-amplify'
import config from './aws-exports'
import { AmplifyAuthenticator, AmplifySignOut, withAuthenticator } from '@aws-amplify/ui-react'
Amplify.configure(config)

function App() {
  return (
    <AmplifyAuthenticator>
      <div className="App">
        <header>
          <img src={logo} className="App-logo" alt="logo" />
          <h1>We now have Auth!!!</h1>
        </header>
        <AmplifySignOut />
      </div>
    </AmplifyAuthenticator>
  );
}

export default withAuthenticator(App);
