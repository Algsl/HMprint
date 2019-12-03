var app=getApp()
Page({
  data: {
    currentTab:0,
    orderList:[],
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
    wx.request({
      url: 'http://print.gesilaa6.club/index.php/user/order/getOrderList.html',
      data:{open_id:app.globalData.openId,status:e.detail.current},
      success:function(res){
        that.setData({orderList:res.data.data})
      }
    })
  },
})