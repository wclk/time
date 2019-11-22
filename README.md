# 
# timeFortypecho相册模板
demo：<a href="http://photo.zmki.cn/">photo.zmki.cn</a>
<img src="https://a-oss.zmki.cn/2019/20191121-47ee9a7e539da.png" />

由钻芒博客发布


<p><a href="https://www.zmki.cn" rel="nofollow">官网</a>  
<a href="https://https://github.com/wclk/time" rel="nofollow">项目</a>  
<a href="http://photo.zmki.cn/" rel="nofollow">演示</a>  
<a href="https://tool.zmki.cn" rel="nofollow">导航</a></p>
<p><a href="https://github.com/wclk/time"><img src="https://camo.githubusercontent.com/9d2eb231f1fabe10b74bad6085abac7e0e83521e/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d47504c5f56332e302d79656c6c6f77677265656e2e737667" alt="License" data-canonical-src="https://img.shields.io/badge/license-GPL_V3.0-yellowgreen.svg" style="max-width:100%;"></a>
<a href="http://php.net" rel="nofollow"><img src="https://camo.githubusercontent.com/66365f9735c4fa81a68fbc70255a9fd3b6ced0f9/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f5048502d2533453d352e362d6f72616e67652e737667" alt="PHP" data-canonical-src="https://img.shields.io/badge/PHP-%3E=5.6-orange.svg" style="max-width:100%;"></a>
</p>

 
  <h3>截图</h3>
 <img src="https://a-oss.zmki.cn/2019/20191121-47ee9a7e539da.png" />
 
这个一个基于typecho的相册模板。前端采用Multiverse，由钻芒适配并优化


----------

**使用方法**
--------
将主题上传到typecho模板目录 `/usr/themes/`

**使用前需前往typecho后台，设置-阅读，调整 每页文章显示**
默认是5，首页只会输出5篇文章。需调整大一些，即可实现无限滚动
![阅读设置为999][1]



**图片添加方式:**
-----------
**考虑到国内idc带宽,为了用户的访问速度。图片采用外链方式插入。**

后台撰写新文章,标题即是前端图片标题，文章内容即是图片描述。
图片链接填写在文章编辑器下方自定义字段的`图片链接`一栏
最后点击发布即可查看
![后台设置][2]

**关于图片问题**
------
web图片一直是占用资源占用最大的。图片站更是了不得。太多太大会影响访问速度。说一下现有几种解决方案

 **1. 压缩图片**
这个是必须的吧，推荐 [tinyPNG][3]  更多压缩工具可查看[极客导航][4]
 **2. 列表项**
 图片转换成webp格式，webp由Google开发，可无损大幅减少图片内存。原生支持Chrome Firefox，安卓。ios不支持 （可代码适配，后期加入） 关于webp自行了解
 
 国内的云储存一般都支持格式转换，如阿里云，又拍云等
 阿里云快速将图片转换成webp格式。
 在阿里云oss  可使用样式将图片转换成webp
 ![此处输入图片的描述][5]
 
 **例如:**
 
 **转换前 jpg格式  268kb**
 https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg
 ![此处输入图片的描述][6]
 
 
 **转换后 webp格式 140kb**
 https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp
![此处输入图片的描述][7]



**更新**
--

**V1.0.2更新**

 1. 修复进场加载特效（黑色瀑布）
 2. 优化访问速度

**V1.0.1  第一个版本**
 1. 多字段后台可调
 2. 友好的SEO，后台可设置tkd
 3. 关于联系方式后台可调


 

致谢:
---
HTML UP

**赞赏作者:**
-----
本主题开源免费，如果有帮助到你，可以考虑打赏，谢谢！

![此处输入图片的描述][8]

 


  [1]: https://a-oss.zmki.cn/2019/20191122-3b6d4a8d7ff1a.png
  [2]: https://a-oss.zmki.cn/2019/20191122-331e5608875bc.png
  [3]: https://tinypng.com/
  [4]: https://tool.zmki.cn/
  [5]: https://a-oss.zmki.cn/2019/20191122-606d69b9caf92.png
  [6]: https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg
  [7]: https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp
  [8]: https://a-oss.zmki.cn/2019/20191122-473268f0745e5.png
