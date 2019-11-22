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

 
<span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 10pt;">博主半个摄影控。一直想做个相册展示站，最近心血来潮。自用刚需项目。Time便应运而生。前端采用Multiverse，后台用的是typecho。瀑布流无限加载，支持图片灯箱效果。底栏顶栏已集成到<code>index.php</code>首页
</span><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 10pt;">For WordPress版本 计划开发适配中...（猴年马月）</span>

<span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 10pt;"> 秉承开源精神，代码无加密，已打包至GitHub。</span>
<ul>
 	<li><span style="font-size: 10pt;"><span style="color: #333399;">GitHub：</span><a href="https://github.com/wclk/time" target="_blank" rel="noopener">github.com/wclk/time</a></span></li>
 	<li><span style="font-size: 10pt;"><span style="color: #333399;">Demo:</span> <a href="https://photo.zmki.cn/" target="_blank" rel="noopener">photo.zmki.cn</a></span></li>
</ul>
<span style="font-size: 10pt; color: #000000;">截图:</span>

<span style="font-size: 10pt;"><img class="alignnone size-full" src="https://a-oss.zmki.cn/2019/20191121-47ee9a7e539da.png" width="940" height="596" /></span>

<span style="font-size: 10pt;"><img class="alignnone size-full" src="https://a-oss.zmki.cn/2019/20191122-3cf5bb78a752c.png" width="1902" height="926" /></span>

<span style="font-size: 10pt;"><img class="alignnone " src="https://a-oss.zmki.cn/2019/20191122-69abd21561715.png" width="801" height="981" /></span>
<h3><span style="font-size: 10pt;">这个一个基于typecho的相册模板。前端采用Multiverse，由钻芒适配并优化</span></h3>
<h2><span style="font-size: 10pt;"><strong>使用方法</strong></span></h2>
<span style="font-size: 10pt;">将主题上传到typecho模板目录 <code>/usr/themes/</code></span>
<ul>
 	<li><span style="font-size: 10pt;"><strong>使用前需前往typecho后台，设置-阅读，调整每页文章显示替换为</strong> 5</span></li>
 	<li><span style="font-size: 10pt;">首页只会输出5篇文章。需调整大一些，即可实现无限滚动</span></li>
</ul>
<span style="font-size: 10pt;"><a href="https://a-oss.zmki.cn/2019/20191122-3b6d4a8d7ff1a.png"><img class="alignnone size-full" src="https://a-oss.zmki.cn/2019/20191122-3b6d4a8d7ff1a.png-img" width="1132" height="621" /></a></span>
<h3><span style="font-size: 10pt;">图片添加方式：</span></h3>
<div id="sc_blue"><span style="font-size: 10pt;">考虑到国内的IDc带宽，为了用户的访问速度。图片采用外链方式插入。（推荐搭配图床使用）</span></div>
<span style="font-size: 10pt;">图片链接填充在文章编辑器下面的自定义段落的<code>图片链接</code>一栏</span>

<span style="font-size: 10pt;"><a href="https://a-oss.zmki.cn/2019/20191122-331e5608875bc.png"><img class="alignnone" src="https://a-oss.zmki.cn/2019/20191122-331e5608875bc.png-img" alt="" width="1398" height="837" /></a></span>
<h2><span style="font-size: 10pt;"><strong>关于图片问题</strong></span></h2>
<span style="font-size: 10pt;">网页中图片一直是占用资源最大的。图片站当然更了不得。太大会影响访问速度。说一下现有解决方案</span>
<ol>
 	<li><span style="font-size: 10pt;"><strong>压缩图片</strong> 推荐<a href="https://tinypng.com/" rel="nofollow">tinyPNG</a>   更多压缩工具可以查看<a href="https://tool.zmki.cn/" rel="nofollow">极客导航</a> </span></li>
 	<li><span style="font-size: 10pt;"><strong>列表项</strong> 图片转换成webp格式，webp由Google开发，可无损大幅减少图片内存。原生支持Chrome Firefox，安卓。ios不支持（可代码适配，后续加入）</span></li>
</ol>
<ul>
 	<li><span style="font-size: 10pt;">国内的云存储一般都支持格式转换，如阿里云，又拍云等</span></li>
</ul>
<div id="sc_xuk"><strong><span style="font-size: 10pt; color: #333399;">阿里云快速将图片转换成webp格式。在阿里云oss可使用样式将图片转换成webp</span></strong></div>
<span style="font-size: 10pt;"><a href="https://a-oss.zmki.cn/2019/20191122-606d69b9caf92.png"><img class="alignnone size-full" src="https://a-oss.zmki.cn/2019/20191122-606d69b9caf92.png-img" width="903" height="525" /></a></span>
<div id="sc_warn"><span style="font-size: 10pt; color: #333399;"><strong>例如： （点击图片可放大）</strong></span></div>
<span style="font-size: 10pt;"><strong>转换前  <code>jpg格式</code>   <code>268kb</code> </strong><a href="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg" rel="nofollow">https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg</a></span>

<span style="font-size: 10pt;"><a href="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg"><img class="alignnone" src="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg" alt="" width="1377" height="775" /></a></span>

<span style="font-size: 10pt;"><strong>转换后 <code> webp格式</code> <code>140kb</code></strong> <a href="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp" rel="nofollow">https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp</a></span>

<a href="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp"><img class="alignnone size-full" src="https://a-oss.zmki.cn/2019/20191121-9d2f622305c0c.jpg-webp" width="3809" height="2143" /></a>
<h2><span style="font-size: 10pt;"><strong>更新</strong></span></h2>
<ul>
 	<li><span style="font-size: 10pt;"><strong>V1.0.2更新</strong></span></li>
</ul>
<ol>
 	<li><span style="font-size: 10pt;">修复进场加载特效（黑色瀑布）</span></li>
 	<li><span style="font-size: 10pt;">优化访问速度</span></li>
</ol>
<ul>
 	<li><span style="font-size: 10pt;"><strong>V1.0.1 第一个版本</strong></span></li>
</ul>
<ol>
 	<li><span style="font-size: 10pt;">多字段后台可调</span></li>
 	<li><span style="font-size: 10pt;">友好的SEO，后台可设置tkd</span></li>
 	<li><span style="font-size: 10pt;">关于联系方式后台可调</span></li>
</ol>
<h2><span style="font-size: 10pt;"><a id="user-content-致谢" class="anchor" href="https://github.com/wclk/time#%E8%87%B4%E8%B0%A2" aria-hidden="true"></a>致谢:</span></h2>
<span style="font-size: 10pt;">HTML UP</span>
<h3><span style="font-size: 10pt;">主题下载:</span></h3>
&nbsp;
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
