import fetch from 'node-fetch'
import { NetUtils } from './NetUtils.mjs'

const myHeaders = {
  cookie: 'foo=bar; bar=baz',
  'x-pretty-print': '2'
}

const netTest = new NetUtils('http://mockbin.com/request?foo=bar&foo=baz', 'GET', myHeaders, myAction, fetch)

function myAction (response) {
  console.log('Only printing the resulting status of the call : ', response.statusText)
}

netTest.proceed()

console.log('Waiting response...')
