import{_ as c}from"./Modal-554662fa.js";import{o as i,c as n,w as d,a as s,r as o}from"./app-e054b93f.js";const r={class:"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"},h={class:"row"},_=s("div",{class:"container-fluid text-center"},[s("h1",{class:"my-4"},[s("i",{class:"fa-solid fa-spinner fa-spin fa-2xl",style:{color:"#0D6EFD"}})])],-1),m={class:"container-fluid mt-3 text-center"},f={class:"text-gray-900"},p={class:"container-fluid mt-2 text-center"},x={class:"text-gray-600"},y={__name:"LoadingModal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(t,{emit:a}){const l=()=>{a("close")};return(e,u)=>(i(),n(c,{show:t.show,"max-width":t.maxWidth,closeable:t.closeable,onClose:l},{default:d(()=>[s("div",r,[s("div",h,[_,s("div",m,[s("h3",f,[o(e.$slots,"title")])]),s("div",p,[s("div",x,[s("h4",null,[o(e.$slots,"content")])])])])])]),_:3},8,["show","max-width","closeable"]))}};export{y as _};
