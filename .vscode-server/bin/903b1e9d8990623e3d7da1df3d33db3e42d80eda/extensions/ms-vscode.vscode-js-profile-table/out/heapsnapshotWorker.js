(()=>{"use strict";var e,t,_,r,n={288:(e,t,_)=>{_.a(e,(async(e,r)=>{try{_.r(t),_.d(t,{ClassGroup:()=>i._o,EdgeType:()=>i.Pb,Graph:()=>i.kJ,Node:()=>i.NB,NodeType:()=>i.Jq,RetainerNode:()=>i.Dr,WasmSortBy:()=>i.cD,__wbg_classgroup_new:()=>i.Aw,__wbg_error_f851667af71bcfc6:()=>i.iX,__wbg_new_abda76e883ba8a5f:()=>i.a2,__wbg_node_new:()=>i.ks,__wbg_retainernode_new:()=>i.zD,__wbg_set_wasm:()=>i.oT,__wbg_stack_658279fe44541cf6:()=>i.KM,__wbindgen_object_drop_ref:()=>i.ug,__wbindgen_string_get:()=>i.qt,__wbindgen_string_new:()=>i.h4,__wbindgen_throw:()=>i.Or,decode_bytes:()=>i.mS,init_panic_hook:()=>i.Of});var n=_(229),i=_(683),s=e([n]);n=(s.then?(await s)():s)[0],(0,i.oT)(n),r()}catch(e){r(e)}}))},683:(e,t,_)=>{let r;function n(e){r=e}_.d(t,{Aw:()=>D,Dr:()=>E,Jq:()=>O,KM:()=>A,NB:()=>N,Of:()=>v,Or:()=>G,Pb:()=>S,_o:()=>P,a2:()=>q,cD:()=>j,h4:()=>I,iX:()=>U,kJ:()=>M,ks:()=>C,mS:()=>m,oT:()=>n,qt:()=>R,ug:()=>B,zD:()=>T}),e=_.hmd(e);let i=new("undefined"==typeof TextDecoder?(0,e.require)("util").TextDecoder:TextDecoder)("utf-8",{ignoreBOM:!0,fatal:!0});i.decode();let s=null;function o(){return null!==s&&0!==s.byteLength||(s=new Uint8Array(r.memory.buffer)),s}function a(e,t){return e>>>=0,i.decode(o().subarray(e,e+t))}const d=new Array(128).fill(void 0);d.push(void 0,null,!0,!1);let g=d.length;function c(e){g===d.length&&d.push(d.length+1);const t=g;return g=d[t],d[t]=e,t}function l(e){return d[e]}function b(e){const t=l(e);return function(e){e<132||(d[e]=g,g=e)}(e),t}let p=0,w=new("undefined"==typeof TextEncoder?(0,e.require)("util").TextEncoder:TextEncoder)("utf-8");const u="function"==typeof w.encodeInto?function(e,t){return w.encodeInto(e,t)}:function(e,t){const _=w.encode(e);return t.set(_),{read:e.length,written:_.length}};function h(e,t,_){if(void 0===_){const _=w.encode(e),r=t(_.length,1)>>>0;return o().subarray(r,r+_.length).set(_),p=_.length,r}let r=e.length,n=t(r,1)>>>0;const i=o();let s=0;for(;s<r;s++){const t=e.charCodeAt(s);if(t>127)break;i[n+s]=t}if(s!==r){0!==s&&(e=e.slice(s)),n=_(n,r,r=s+3*e.length,1)>>>0;const t=o().subarray(n+s,n+r);s+=u(e,t).written}return p=s,n}let f=null;function y(){return null!==f&&0!==f.byteLength||(f=new Int32Array(r.memory.buffer)),f}function m(e){try{const n=r.__wbindgen_add_to_stack_pointer(-16),i=function(e,t){const _=t(1*e.length,1)>>>0;return o().set(e,_/1),p=e.length,_}(e,r.__wbindgen_malloc),s=p;r.decode_bytes(n,i,s);var t=y()[n/4+0],_=y()[n/4+1];if(y()[n/4+2])throw b(_);return M.__wrap(t)}finally{r.__wbindgen_add_to_stack_pointer(16)}}function v(){r.init_panic_hook()}let x=null;function k(){return null!==x&&0!==x.byteLength||(x=new Uint32Array(r.memory.buffer)),x}function z(e,t){e>>>=0;const _=k().subarray(e/4,e/4+t),r=[];for(let e=0;e<_.length;e++)r.push(b(_[e]));return r}const S=Object.freeze({Context:0,0:"Context",Element:1,1:"Element",Property:2,2:"Property",Internal:3,3:"Internal",Hidden:4,4:"Hidden",Shortcut:5,5:"Shortcut",Weak:6,6:"Weak",Invisible:7,7:"Invisible",Other:8,8:"Other"}),O=Object.freeze({Hidden:0,0:"Hidden",Array:1,1:"Array",String:2,2:"String",Object:3,3:"Object",Code:4,4:"Code",Closure:5,5:"Closure",RegExp:6,6:"RegExp",Number:7,7:"Number",Native:8,8:"Native",Syntheic:9,9:"Syntheic",ConcatString:10,10:"ConcatString",SliceString:11,11:"SliceString",BigInt:12,12:"BigInt",Other:13,13:"Other"}),j=Object.freeze({SelfSize:0,0:"SelfSize",RetainedSize:1,1:"RetainedSize",Name:2,2:"Name"});class P{static __wrap(e){e>>>=0;const t=Object.create(P.prototype);return t.__wbg_ptr=e,t}__destroy_into_raw(){const e=this.__wbg_ptr;return this.__wbg_ptr=0,e}free(){const e=this.__destroy_into_raw();r.__wbg_classgroup_free(e)}get self_size(){const e=r.__wbg_get_classgroup_self_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set self_size(e){r.__wbg_set_classgroup_self_size(this.__wbg_ptr,e)}get retained_size(){const e=r.__wbg_get_classgroup_retained_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set retained_size(e){r.__wbg_set_classgroup_retained_size(this.__wbg_ptr,e)}get children_len(){return r.__wbg_get_classgroup_children_len(this.__wbg_ptr)>>>0}set children_len(e){r.__wbg_set_classgroup_children_len(this.__wbg_ptr,e)}name(){let e,t;try{const i=r.__wbindgen_add_to_stack_pointer(-16);r.classgroup_name(i,this.__wbg_ptr);var _=y()[i/4+0],n=y()[i/4+1];return e=_,t=n,a(_,n)}finally{r.__wbindgen_add_to_stack_pointer(16),r.__wbindgen_free(e,t,1)}}}class M{static __wrap(e){e>>>=0;const t=Object.create(M.prototype);return t.__wbg_ptr=e,t}__destroy_into_raw(){const e=this.__wbg_ptr;return this.__wbg_ptr=0,e}free(){const e=this.__destroy_into_raw();r.__wbg_graph_free(e)}get root_index(){return r.__wbg_get_graph_root_index(this.__wbg_ptr)>>>0}set root_index(e){r.__wbg_set_graph_root_index(this.__wbg_ptr,e)}get_class_groups(e,t,_){try{const o=r.__wbindgen_add_to_stack_pointer(-16);r.graph_get_class_groups(o,this.__wbg_ptr,e,t,_);var n=y()[o/4+0],i=y()[o/4+1],s=z(n,i).slice();return r.__wbindgen_free(n,4*i,4),s}finally{r.__wbindgen_add_to_stack_pointer(16)}}get_class_counts(e){try{const o=r.__wbindgen_add_to_stack_pointer(-16),a=function(e,t){const _=t(4*e.length,4)>>>0,r=k();for(let t=0;t<e.length;t++)r[_/4+t]=c(e[t]);return p=e.length,_}(e,r.__wbindgen_malloc),d=p;r.graph_get_class_counts(o,this.__wbg_ptr,a,d);var t=y()[o/4+0],_=y()[o/4+1],n=(i=t,s=_,i>>>=0,k().subarray(i/4,i/4+s)).slice();return r.__wbindgen_free(t,4*_,4),n}finally{r.__wbindgen_add_to_stack_pointer(16)}var i,s}class_children(e,t,_,n){try{const a=r.__wbindgen_add_to_stack_pointer(-16);r.graph_class_children(a,this.__wbg_ptr,e,t,_,n);var i=y()[a/4+0],s=y()[a/4+1],o=z(i,s).slice();return r.__wbindgen_free(i,4*s,4),o}finally{r.__wbindgen_add_to_stack_pointer(16)}}node_children(e,t,_,n){try{const a=r.__wbindgen_add_to_stack_pointer(-16);r.graph_node_children(a,this.__wbg_ptr,e,t,_,n);var i=y()[a/4+0],s=y()[a/4+1],o=z(i,s).slice();return r.__wbindgen_free(i,4*s,4),o}finally{r.__wbindgen_add_to_stack_pointer(16)}}get_all_retainers(e,t){try{const s=r.__wbindgen_add_to_stack_pointer(-16);r.graph_get_all_retainers(s,this.__wbg_ptr,e,t);var _=y()[s/4+0],n=y()[s/4+1],i=z(_,n).slice();return r.__wbindgen_free(_,4*n,4),i}finally{r.__wbindgen_add_to_stack_pointer(16)}}}class N{static __wrap(e){e>>>=0;const t=Object.create(N.prototype);return t.__wbg_ptr=e,t}__destroy_into_raw(){const e=this.__wbg_ptr;return this.__wbg_ptr=0,e}free(){const e=this.__destroy_into_raw();r.__wbg_node_free(e)}get children_len(){return r.__wbg_get_classgroup_children_len(this.__wbg_ptr)>>>0}set children_len(e){r.__wbg_set_classgroup_children_len(this.__wbg_ptr,e)}get self_size(){const e=r.__wbg_get_classgroup_self_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set self_size(e){r.__wbg_set_classgroup_self_size(this.__wbg_ptr,e)}get retained_size(){const e=r.__wbg_get_classgroup_retained_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set retained_size(e){r.__wbg_set_classgroup_retained_size(this.__wbg_ptr,e)}get index(){return r.__wbg_get_node_index(this.__wbg_ptr)>>>0}set index(e){r.__wbg_set_node_index(this.__wbg_ptr,e)}get typ(){return r.__wbg_get_node_typ(this.__wbg_ptr)}set typ(e){r.__wbg_set_node_typ(this.__wbg_ptr,e)}get id(){return r.__wbg_get_node_id(this.__wbg_ptr)>>>0}set id(e){r.__wbg_set_node_id(this.__wbg_ptr,e)}name(){let e,t;try{const i=r.__wbindgen_add_to_stack_pointer(-16);r.node_name(i,this.__wbg_ptr);var _=y()[i/4+0],n=y()[i/4+1];return e=_,t=n,a(_,n)}finally{r.__wbindgen_add_to_stack_pointer(16),r.__wbindgen_free(e,t,1)}}}class E{static __wrap(e){e>>>=0;const t=Object.create(E.prototype);return t.__wbg_ptr=e,t}__destroy_into_raw(){const e=this.__wbg_ptr;return this.__wbg_ptr=0,e}free(){const e=this.__destroy_into_raw();r.__wbg_retainernode_free(e)}get retains_index(){return r.__wbg_get_retainernode_retains_index(this.__wbg_ptr)>>>0}set retains_index(e){r.__wbg_set_retainernode_retains_index(this.__wbg_ptr,e)}get children_len(){return r.__wbg_get_classgroup_children_len(this.__wbg_ptr)>>>0}set children_len(e){r.__wbg_set_classgroup_children_len(this.__wbg_ptr,e)}get self_size(){const e=r.__wbg_get_classgroup_self_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set self_size(e){r.__wbg_set_classgroup_self_size(this.__wbg_ptr,e)}get retained_size(){const e=r.__wbg_get_classgroup_retained_size(this.__wbg_ptr);return BigInt.asUintN(64,e)}set retained_size(e){r.__wbg_set_classgroup_retained_size(this.__wbg_ptr,e)}get index(){return r.__wbg_get_node_index(this.__wbg_ptr)>>>0}set index(e){r.__wbg_set_node_index(this.__wbg_ptr,e)}get typ(){return r.__wbg_get_retainernode_typ(this.__wbg_ptr)}set typ(e){r.__wbg_set_retainernode_typ(this.__wbg_ptr,e)}get id(){return r.__wbg_get_node_id(this.__wbg_ptr)>>>0}set id(e){r.__wbg_set_node_id(this.__wbg_ptr,e)}get edge_typ(){return r.__wbg_get_retainernode_edge_typ(this.__wbg_ptr)}set edge_typ(e){r.__wbg_set_retainernode_edge_typ(this.__wbg_ptr,e)}name(){let e,t;try{const i=r.__wbindgen_add_to_stack_pointer(-16);r.retainernode_name(i,this.__wbg_ptr);var _=y()[i/4+0],n=y()[i/4+1];return e=_,t=n,a(_,n)}finally{r.__wbindgen_add_to_stack_pointer(16),r.__wbindgen_free(e,t,1)}}}function I(e,t){return c(a(e,t))}function B(e){b(e)}function D(e){return c(P.__wrap(e))}function C(e){return c(N.__wrap(e))}function T(e){return c(E.__wrap(e))}function q(){return c(new Error)}function A(e,t){const _=h(l(t).stack,r.__wbindgen_malloc,r.__wbindgen_realloc),n=p;y()[e/4+1]=n,y()[e/4+0]=_}function U(e,t){let _,n;try{_=e,n=t,console.error(a(e,t))}finally{r.__wbindgen_free(_,n,1)}}function G(e,t){throw new Error(a(e,t))}function R(e,t){const _=l(t),n="string"==typeof _?_:void 0;var i=null==n?0:h(n,r.__wbindgen_malloc,r.__wbindgen_realloc),s=p;y()[e/4+1]=s,y()[e/4+0]=i}},48:function(e,t,_){var r=this&&this.__createBinding||(Object.create?function(e,t,_,r){void 0===r&&(r=_);var n=Object.getOwnPropertyDescriptor(t,_);n&&!("get"in n?!t.__esModule:n.writable||n.configurable)||(n={enumerable:!0,get:function(){return t[_]}}),Object.defineProperty(e,r,n)}:function(e,t,_,r){void 0===r&&(r=_),e[r]=t[_]}),n=this&&this.__setModuleDefault||(Object.create?function(e,t){Object.defineProperty(e,"default",{enumerable:!0,value:t})}:function(e,t){e.default=t}),i=this&&this.__importStar||function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var _ in e)"default"!==_&&Object.prototype.hasOwnProperty.call(e,_)&&r(t,e,_);return n(t,e),t};Object.defineProperty(t,"__esModule",{value:!0}),t.handleMessage=t.prepareGraphParser=t.isMethod=void 0,t.isMethod=(e,t)=>t.method===e;const s=(e,t)=>{const _=new Array(e.length);for(let r=0;r<e.length;r++){const n=e[r];_[r]=t(n,r),n.free()}return _},o=e=>s(e,(e=>({name:e.name(),childrenLen:e.children_len,id:e.id,index:e.index,retainedSize:Number(e.retained_size),selfSize:Number(e.self_size),type:e.typ,retainsIndex:e.retains_index,edgeType:e.edge_typ})));t.prepareGraphParser=async()=>{const e=await Promise.resolve().then((()=>i(_(288)))),{decode_bytes:t,init_panic_hook:r}=await e.default;return r(),t},t.handleMessage=(e,_)=>e.then((e=>{if((0,t.isMethod)("getClassGroups",_))return s(e.get_class_groups(..._.args,!1),((e,t)=>({name:e.name(),index:t,retainedSize:Number(e.retained_size),selfSize:Number(e.self_size),childrenLen:e.children_len})));if((0,t.isMethod)("getClassChildren",_))return o(e.class_children(..._.args));if((0,t.isMethod)("getNodeChildren",_))return o(e.node_children(..._.args));if((0,t.isMethod)("getRetainers",_))return o(e.get_all_retainers(..._.args));throw new Error(`unknown method ${_.method}`)})).then((e=>({id:_.id,result:{ok:e}}))).catch((e=>({id:_.id,result:{err:e.stack||e.message||String(e)}})))},292:e=>{e.exports=require("fs/promises")},267:e=>{e.exports=require("worker_threads")},229:(e,t,_)=>{var r=_(683);e.exports=_.v(t,e.id,"94625be35e004f01f9d5",{"./v8_heap_parser_bg.js":{__wbindgen_string_new:r.h4,__wbindgen_object_drop_ref:r.ug,__wbg_classgroup_new:r.Aw,__wbg_node_new:r.ks,__wbg_retainernode_new:r.zD,__wbg_new_abda76e883ba8a5f:r.a2,__wbg_stack_658279fe44541cf6:r.KM,__wbg_error_f851667af71bcfc6:r.iX,__wbindgen_throw:r.Or,__wbindgen_string_get:r.qt}})}},i={};function s(e){var t=i[e];if(void 0!==t)return t.exports;var _=i[e]={id:e,loaded:!1,exports:{}};return n[e].call(_.exports,_,_.exports,s),_.loaded=!0,_.exports}e="function"==typeof Symbol?Symbol("webpack queues"):"__webpack_queues__",t="function"==typeof Symbol?Symbol("webpack exports"):"__webpack_exports__",_="function"==typeof Symbol?Symbol("webpack error"):"__webpack_error__",r=e=>{e&&e.d<1&&(e.d=1,e.forEach((e=>e.r--)),e.forEach((e=>e.r--?e.r++:e())))},s.a=(n,i,s)=>{var o;s&&((o=[]).d=-1);var a,d,g,c=new Set,l=n.exports,b=new Promise(((e,t)=>{g=t,d=e}));b[t]=l,b[e]=e=>(o&&e(o),c.forEach(e),b.catch((e=>{}))),n.exports=b,i((n=>{var i;a=(n=>n.map((n=>{if(null!==n&&"object"==typeof n){if(n[e])return n;if(n.then){var i=[];i.d=0,n.then((e=>{s[t]=e,r(i)}),(e=>{s[_]=e,r(i)}));var s={};return s[e]=e=>e(i),s}}var o={};return o[e]=e=>{},o[t]=n,o})))(n);var s=()=>a.map((e=>{if(e[_])throw e[_];return e[t]})),d=new Promise((t=>{(i=()=>t(s)).r=0;var _=e=>e!==o&&!c.has(e)&&(c.add(e),e&&!e.d&&(i.r++,e.push(i)));a.map((t=>t[e](_)))}));return i.r?d:s()}),(e=>(e?g(b[_]=e):d(l),r(o)))),o&&o.d<0&&(o.d=0)},s.d=(e,t)=>{for(var _ in t)s.o(t,_)&&!s.o(e,_)&&Object.defineProperty(e,_,{enumerable:!0,get:t[_]})},s.hmd=e=>((e=Object.create(e)).children||(e.children=[]),Object.defineProperty(e,"exports",{enumerable:!0,set:()=>{throw new Error("ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: "+e.id)}}),e),s.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),s.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.v=(e,t,_,r)=>new Promise((function(e,t){try{var{readFile:r}=require("fs"),{join:n}=require("path");r(n(__dirname,_+".module.wasm"),(function(_,r){if(_)return t(_);e({arrayBuffer:()=>r})}))}catch(e){t(e)}})).then((e=>e.arrayBuffer())).then((e=>WebAssembly.instantiate(e,r))).then((t=>Object.assign(e,t.instance.exports))),s.p="",(()=>{const e=s(292),t=s(267),_=s(48);if(!t.parentPort)throw new Error("must be run in worker thread");const r=Promise.all(["string"==typeof t.workerData?(0,e.readFile)(t.workerData):Promise.resolve(t.workerData),(0,_.prepareGraphParser)()]).then((async([e,t])=>t(e)));t.parentPort.on("message",(e=>{(0,_.handleMessage)(r,e).then((e=>t.parentPort.postMessage(e)))}))})()})();