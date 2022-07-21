import axios from "axios"
export default function ({ $axios, store }) {
  $axios.onRequest((config) => {
    config.headers.common['user_token'] = 9999999999999}
    ) }
