/**
 * Object handling GET & POST request passing a URL as parameter
 * and treating the response via an external function
 * Unit test provided
 */
class NetUtils {
  constructor (url, method, headers, action, fetch) {
    this.url = url
    this.action = action
    this.initParams = {
      method: method,
      headers: headers,
      mode: 'cors',
      cache: 'default'
    }

    this.fetch = fetch
    this.request = new this.fetch.Request(this.url, this.initParams)
  }

  proceed () {
    this.fetch(this.request)
      .then(this.action)
      .catch(function (error) {
        console.error('Error occured : ', error.message)
      })
  }
}

export { NetUtils }
