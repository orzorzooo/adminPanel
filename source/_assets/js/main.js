// const axios = require("axios").default;
import axios from "./axios.min.js";
import vue from "./vue.min.js";
import fakeData from "./generated.json";

var app = new Vue({
  el: "#app",
  data: {
    message: "Hello Vue!",
    fakeDatas: fakeData,
  },
  // methods: {
  //   getData: function() {
  //     let self = this;
  //     axios({
  //       methods: "get",
  //       url: "fakeData.json",
  //     }).than(function(res) {
  //       self.fakeDatas = res.data;
  //     });
  //   },
  // },
});
