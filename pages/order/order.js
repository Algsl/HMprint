
Page({
  data: {
    currentTab:0
  },
  onLoad: function (options) {

  },
  onShow: function () {

  },
  onShareAppMessage: function () {

  },
  clickTab:function(e){
    var that=this
    if(this.data.currentTab==e.target.dataset.current){
      return false
    }else{
      that.setData({currentTab:e.target.dataset.current})
    }
  },
  swiperTab:function(e){
    var that=this
    that.setData({currentTab:e.detail.current})
    
  },
})