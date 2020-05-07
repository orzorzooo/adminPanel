// const axios = require("axios").default;
import axios from "./axios.min.js";
import vue from "./vue.min.js";
import fakeData from "./generated.json";
import productData from "./product.json";

var app = new Vue({
  el: "#app",
  data: {
    productDatas: productData,
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

// var product = new Vue({
//   el: "#product",
//   data: {
//     productDatas: productData,
//   },
// });
