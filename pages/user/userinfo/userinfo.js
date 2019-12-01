var app=getApp()
Page({
  data: {
    userInfo:[],
    index:0,
    array: ['美国', '中国', '巴西', '日本'],
  },


  onLoad: function (options) {
    var that=this
    wx.request({
      url: 'http://print.gesilaa6.club/index.php/user/user/getUserInfo.html',
      data: { open_id: app.globalData.openId },
      success: function (res) {
        that.setData({ userInfo: res.data.data, index: res.data.data.floor })
      }
    })
  },

  onShow: function () {

  },
  onShareAppMessage: function () {

  },

  formSubmit:function(e){
    var formData=e.detail.value
    formData.open_id=app.globalData.openId
    formData.nick_name=app.globalData.userInfo.nickName
    formData.head_img=app.globalData.userInfo.avatarUrl
    console.log(formData)
    wx.request({
      url: 'http://print.gesilaa6.club/index.php/user/user/changeUserInfo.html',
      data:formData,
      success:function(e){
        console.log(e.data)
      }
    })
  },

  bindPickerChange:function(e){
    this.setData({
      index:e.detail.value
    })
  }



})