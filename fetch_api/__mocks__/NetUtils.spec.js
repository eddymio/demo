import { NetUtils } from '../NetUtils.mjs'
import fetchMock from 'jest-fetch-mock'

describe ('Proceed function', () => {
  beforeEach (() => {
    fetchMock.enableMocks()
    fetchMock.resetMocks()
  })

  test ('it should call fetch and action function without any error', async () => {
    fetchMock.mockResponseOnce(JSON.stringify({ body: 'hello' }))

    const mockFn = jest.fn().mockImplementationOnce()

    const utils = new NetUtils('http://localhost/', 'GET', {}, mockFn, fetchMock)
    await utils.proceed()

    expect(fetchMock).toHaveBeenCalledTimes(1)
    expect(mockFn).toBeCalledTimes(1)
  })
})
