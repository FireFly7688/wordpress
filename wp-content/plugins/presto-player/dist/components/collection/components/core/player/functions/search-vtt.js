import Fuse from"fuse.js";import{createElement}from"./util";import{getCues}from"./cache-cues";import is from"./is";export const vttToJson=e=>e?["kind","label","language","id","inBandMetadataTrackDispatchType","mode","src"].reduce(((t,r)=>(e[r]&&(t[r]=e[r]),t)),{cues:e.cues&&Array.prototype.map.call(e.cues,(function(e){return{startTime:e.startTime,endTime:e.endTime,text:e.text,id:e.id}}))}):null;const fuzzySearch=(e,t,r)=>{if(is.empty(t))return[];if(is.empty(r))return[];if(!is.string(e))return[];const n=Object.assign(Object.assign(Object.assign({},null==r?void 0:r.minMatchCharLength),null==r?void 0:r.threshold),{shouldSort:!1,includeMatches:!0,threshold:.3,keys:["text"]});return null!==t&&t&&0!==t.length?new Fuse(t,n).search(e):[]},searchInJson=(e,t,r)=>{if(!is.string(e))return[];if(is.empty(t))return[];if(is.empty(r))return[];const n=fuzzySearch(e,t,r);return n&&Array.prototype.map.call(n,(function(e){return{time:Math.ceil(e.item.startTime),label:""}}))};export function searchVtt(e,t){var r,n,i,s;if(!e)return;if(!(null===(r=null==e?void 0:e.media)||void 0===r?void 0:r.textTracks)||0===(null===(i=null===(n=null==e?void 0:e.media)||void 0===n?void 0:n.textTracks)||void 0===i?void 0:i.length))return;const o=e.media.textTracks,l=(null===(s=e.config.preset)||void 0===s?void 0:s.search)||"";let a="";if(a=-1===e.captions.currentTrack?getCues(e):o[e.captions.currentTrack],is.empty(a))return[];const u=vttToJson(a);return is.empty(u)?[]:searchInJson(t,null==u?void 0:u.cues,l)}export function removeOldMarkers(e){var t;if(!e)return;if(!(null==e?void 0:e.elements)||!(null===(t=null==e?void 0:e.elements)||void 0===t?void 0:t.progress))return;let r=e.elements.progress.querySelectorAll(".plyr__progress__marker");if(!is.empty(r))for(var n=0;n<r.length;n++)r[n].remove()}export function setMarkers(e,t){if(!e)return;if(removeOldMarkers(e),!(null==t?void 0:t.length))return;const r=document.createDocumentFragment(),n=document.createDocumentFragment();t.forEach((t=>{const r=createElement("span",{class:"plyr__progress__marker"},""),i=t.time/e.duration*100+"%";r.addEventListener("click",(()=>{e.currentTime=t.time})),r.style.left=i,n.appendChild(r)})),r.appendChild(n),e.elements.markers={points:n,tip:null},e.elements.progress.appendChild(r)}