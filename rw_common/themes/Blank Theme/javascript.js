
function externalLinks(){if(!document.getElementsByTagName)return;var anchors=document.getElementsByTagName("a");for(var i=0;i<anchors.length;i++){var anchor=anchors[i];if(anchor.getAttribute("href")&&anchor.getAttribute("rel")=="external")
anchor.target="_blank";}}
addLoadEvent(externalLinks);if(typeof deconcept=="undefined")var deconcept=new Object();if(typeof deconcept.util=="undefined")deconcept.util=new Object();if(typeof deconcept.SWFObjectUtil=="undefined")deconcept.SWFObjectUtil=new Object();deconcept.SWFObject=function(swf,id,w,h,ver,c,useExpressInstall,quality,xiRedirectUrl,redirectUrl,detectKey){if(!document.createElement||!document.getElementById){return;}
this.DETECT_KEY=detectKey?detectKey:'detectflash';this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(swf){this.setAttribute('swf',swf);}
if(id){this.setAttribute('id',id);}
if(w){this.setAttribute('width',w);}
if(h){this.setAttribute('height',h);}
if(ver){this.setAttribute('version',new deconcept.PlayerVersion(ver.toString().split(".")));}
this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion(this.getAttribute('version'),useExpressInstall);if(c){this.addParam('bgcolor',c);}
var q=quality?quality:'high';this.addParam('quality',q);this.setAttribute('useExpressInstall',useExpressInstall);this.setAttribute('doExpressInstall',false);var xir=(xiRedirectUrl)?xiRedirectUrl:window.location;this.setAttribute('xiRedirectUrl',xir);this.setAttribute('redirectUrl','');if(redirectUrl){this.setAttribute('redirectUrl',redirectUrl);}}
deconcept.SWFObject.prototype={setAttribute:function(name,value){this.attributes[name]=value;},getAttribute:function(name){return this.attributes[name];},addParam:function(name,value){this.params[name]=value;},getParams:function(){return this.params;},addVariable:function(name,value){this.variables[name]=value;},getVariable:function(name){return this.variables[name];},getVariables:function(){return this.variables;},getVariablePairs:function(){var variablePairs=new Array();var key;var variables=this.getVariables();for(key in variables){variablePairs.push(key+"="+variables[key]);}
return variablePairs;},getSWFHTML:function(){var swfNode="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall"))this.addVariable("MMplayerType","PlugIn");swfNode='<embed type="application/x-shockwave-flash" src="'+this.getAttribute('swf')+'" width="'+this.getAttribute('width')+'" height="'+this.getAttribute('height')+'"';swfNode+=' id="'+this.getAttribute('id')+'" name="'+this.getAttribute('id')+'" ';var params=this.getParams();for(var key in params){swfNode+=[key]+'="'+params[key]+'" ';}
var pairs=this.getVariablePairs().join("&");if(pairs.length>0){swfNode+='flashvars="'+pairs+'"';}
swfNode+='/>';}else{if(this.getAttribute("doExpressInstall"))this.addVariable("MMplayerType","ActiveX");swfNode='<object id="'+this.getAttribute('id')+'" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+this.getAttribute('width')+'" height="'+this.getAttribute('height')+'">';swfNode+='<param name="movie" value="'+this.getAttribute('swf')+'" />';var params=this.getParams();for(var key in params){swfNode+='<param name="'+key+'" value="'+params[key]+'" />';}
var pairs=this.getVariablePairs().join("&");if(pairs.length>0){swfNode+='<param name="flashvars" value="'+pairs+'" />';}
swfNode+="</object>";}
return swfNode;},write:function(elementId){if(this.getAttribute('useExpressInstall')){var expressInstallReqVer=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(expressInstallReqVer)&&!this.installedVer.versionIsValid(this.getAttribute('version'))){this.setAttribute('doExpressInstall',true);this.addVariable("MMredirectURL",escape(this.getAttribute('xiRedirectUrl')));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}
if(this.skipDetect||this.getAttribute('doExpressInstall')||this.installedVer.versionIsValid(this.getAttribute('version'))){var n=(typeof elementId=='string')?document.getElementById(elementId):elementId;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute('redirectUrl')!=""){document.location.replace(this.getAttribute('redirectUrl'));}}
return false;}}
deconcept.SWFObjectUtil.getPlayerVersion=function(reqVer,xiInstall){var PlayerVersion=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){PlayerVersion=new deconcept.PlayerVersion(x.description.replace(/([a-z]|[A-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");for(var i=3;axo!=null;i++){axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+i);PlayerVersion=new deconcept.PlayerVersion([i,0,0]);}}catch(e){}
if(reqVer&&PlayerVersion.major>reqVer.major)return PlayerVersion;if(!reqVer||((reqVer.minor!=0||reqVer.rev!=0)&&PlayerVersion.major==reqVer.major)||PlayerVersion.major!=6||xiInstall){try{PlayerVersion=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}catch(e){}}}
return PlayerVersion;}
deconcept.PlayerVersion=function(arrVersion){this.major=parseInt(arrVersion[0])!=null?parseInt(arrVersion[0]):0;this.minor=parseInt(arrVersion[1])||0;this.rev=parseInt(arrVersion[2])||0;}
deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major)return false;if(this.major>fv.major)return true;if(this.minor<fv.minor)return false;if(this.minor>fv.minor)return true;if(this.rev<fv.rev)return false;return true;}
deconcept.util={getRequestParameter:function(param){var q=document.location.search||document.location.hash;if(q){var startIndex=q.indexOf(param+"=");var endIndex=(q.indexOf("&",startIndex)>-1)?q.indexOf("&",startIndex):q.length;if(q.length>1&&startIndex>-1){return q.substring(q.indexOf("=",startIndex)+1,endIndex);}}
return"";}}
deconcept.SWFObjectUtil.cleanupSWFs=function(){var objects=document.getElementsByTagName("OBJECT");for(var i=0;i<objects.length;i++){for(var x in objects[i]){if(typeof objects[i][x]=='function'){objects[i][x]=null;}}}}
if(typeof window.onunload=='function'){var oldunload=window.onunload;window.onunload=function(){deconcept.SWFObjectUtil.cleanupSWFs();oldunload();}}else{window.onunload=deconcept.SWFObjectUtil.cleanupSWFs;}
if(Array.prototype.push==null){Array.prototype.push=function(item){this[this.length]=item;return this.length;}}
var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;var gArgCountErr='The "%%" function requires an even number of arguments.'
+'\nArguments should be in the form "atttributeName", "attributeValue", ...';var gTagAttrs=null;var gQTGeneratorVersion=1.0;function AC_QuickTimeVersion(){return gQTGeneratorVersion;}
function _QTComplain(callingFcnName,errMsg)
{errMsg=errMsg.replace("%%",callingFcnName);alert(errMsg);}
function _QTAddAttribute(prefix,slotName,tagName)
{var value;value=gTagAttrs[prefix+slotName];if(null==value)
value=gTagAttrs[slotName];if(null!=value)
{if(0==slotName.indexOf(prefix)&&(null==tagName))
tagName=slotName.substring(prefix.length);if(null==tagName)
tagName=slotName;return tagName+'="'+value+'" ';}
else
return"";}
function _QTAddObjectAttr(slotName,tagName)
{if(0==slotName.indexOf("emb#"))
return"";if(0==slotName.indexOf("obj#")&&(null==tagName))
tagName=slotName.substring(4);return _QTAddAttribute("obj#",slotName,tagName);}
function _QTAddEmbedAttr(slotName,tagName)
{if(0==slotName.indexOf("obj#"))
return"";if(0==slotName.indexOf("emb#")&&(null==tagName))
tagName=slotName.substring(4);return _QTAddAttribute("emb#",slotName,tagName);}
function _QTAddObjectParam(slotName,generateXHTML)
{var paramValue;var paramStr="";var endTagChar=(generateXHTML)?' />':'>';if(-1==slotName.indexOf("emb#"))
{paramValue=gTagAttrs["obj#"+slotName];if(null==paramValue)
paramValue=gTagAttrs[slotName];if(0==slotName.indexOf("obj#"))
slotName=slotName.substring(4);if(null!=paramValue)
paramStr='  <param name="'+slotName+'" value="'+paramValue+'"'+endTagChar+'\n';}
return paramStr;}
function _QTDeleteTagAttrs()
{for(var ndx=0;ndx<arguments.length;ndx++)
{var attrName=arguments[ndx];delete gTagAttrs[attrName];delete gTagAttrs["emb#"+attrName];delete gTagAttrs["obj#"+attrName];}}
function _QTGenerate(callingFcnName,generateXHTML,args)
{if(args.length<4||(0!=(args.length%2)))
{_QTComplain(callingFcnName,gArgCountErr);return"";}
gTagAttrs=new Array();gTagAttrs["src"]=args[0];gTagAttrs["width"]=args[1];gTagAttrs["height"]=args[2];gTagAttrs["classid"]="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B";gTagAttrs["pluginspage"]="http://www.apple.com/quicktime/download/";var activexVers=args[3]
if((null==activexVers)||(""==activexVers))
activexVers="6,0,2,0";gTagAttrs["codebase"]="http://www.apple.com/qtactivex/qtplugin.cab#version="+activexVers;var attrName,attrValue;for(var ndx=4;ndx<args.length;ndx+=2)
{attrName=args[ndx].toLowerCase();attrValue=args[ndx+1];if("name"==attrName||"id"==attrName)
gTagAttrs["name"]=attrValue;else
gTagAttrs[attrName]=attrValue;}
var objTag='<object '
+_QTAddObjectAttr("classid")
+_QTAddObjectAttr("width")
+_QTAddObjectAttr("height")
+_QTAddObjectAttr("codebase")
+_QTAddObjectAttr("name","id")
+_QTAddObjectAttr("tabindex")
+_QTAddObjectAttr("hspace")
+_QTAddObjectAttr("vspace")
+_QTAddObjectAttr("border")
+_QTAddObjectAttr("align")
+_QTAddObjectAttr("class")
+_QTAddObjectAttr("title")
+_QTAddObjectAttr("accesskey")
+_QTAddObjectAttr("noexternaldata")
+'>\n'
+_QTAddObjectParam("src",generateXHTML);var embedTag='  <embed '
+_QTAddEmbedAttr("src")
+_QTAddEmbedAttr("width")
+_QTAddEmbedAttr("height")
+_QTAddEmbedAttr("pluginspage")
+_QTAddEmbedAttr("name")
+_QTAddEmbedAttr("align")
+_QTAddEmbedAttr("tabindex");_QTDeleteTagAttrs("src","width","height","pluginspage","classid","codebase","name","tabindex","hspace","vspace","border","align","noexternaldata","class","title","accesskey");for(var attrName in gTagAttrs)
{attrValue=gTagAttrs[attrName];if(null!=attrValue)
{embedTag+=_QTAddEmbedAttr(attrName);objTag+=_QTAddObjectParam(attrName,generateXHTML);}}
return objTag+embedTag+'> </em'+'bed>\n</ob'+'ject'+'>';}
function QT_GenerateOBJECTText()
{return _QTGenerate("QT_GenerateOBJECTText",false,arguments);}
function QT_GenerateOBJECTText_XHTML()
{return _QTGenerate("QT_GenerateOBJECTText_XHTML",true,arguments);}
function QT_WriteOBJECT()
{document.writeln(_QTGenerate("QT_WriteOBJECT",false,arguments));}
function QT_WriteOBJECT_XHTML()
{document.writeln(_QTGenerate("QT_WriteOBJECT_XHTML",true,arguments));}
function addLoadEvent(func){var oldonload=window.onload;if(typeof window.onload!='function'){window.onload=func;}else{window.onload=function(){if(oldonload){oldonload();}
func();}}}