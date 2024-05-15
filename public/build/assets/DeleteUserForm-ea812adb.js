import{i as m,T as f,o as y,f as w,b as a,w as t,a as s,p as h,j as c,k as o,M as g,n as v}from"./app-e054b93f.js";import{D as d}from"./DangerButton-de8a7c92.js";import{_ as x,a as C}from"./TextInput-338b2532.js";import{_ as k}from"./InputLabel-caa22c5d.js";import{_ as B}from"./Modal-554662fa.js";import{_ as U}from"./SecondaryButton-d0d30255.js";import"./_plugin-vue_export-helper-c27b6911.js";const V={class:"space-y-6"},q=s("header",null,[s("h2",{class:"text-lg font-medium text-gray-900"},"Borrar Cuenta"),s("p",{class:"mt-1 text-sm text-gray-600"}," Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar. ")],-1),D={class:"p-6"},$=s("h2",{class:"text-lg font-medium text-gray-900"}," Are you sure you want to delete your account? ",-1),b=s("p",{class:"mt-1 text-sm text-gray-600"}," Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Por favor ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta. ",-1),z={class:"mt-6"},K={class:"mt-6 flex justify-end"},S={__name:"DeleteUserForm",setup(N){const r=m(!1),n=m(null),e=f({password:""}),p=()=>{r.value=!0,h(()=>n.value.focus())},i=()=>{e.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>l(),onError:()=>n.value.focus(),onFinish:()=>e.reset()})},l=()=>{r.value=!1,e.reset()};return(P,u)=>(y(),w("section",V,[q,a(d,{onClick:p},{default:t(()=>[c("Borrar Cuenta")]),_:1}),a(B,{show:r.value,onClose:l},{default:t(()=>[s("div",D,[$,b,s("div",z,[a(k,{for:"password",value:"Password",class:"sr-only"}),a(x,{id:"password",ref_key:"passwordInput",ref:n,modelValue:o(e).password,"onUpdate:modelValue":u[0]||(u[0]=_=>o(e).password=_),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:g(i,["enter"])},null,8,["modelValue","onKeyup"]),a(C,{message:o(e).errors.password,class:"mt-2"},null,8,["message"])]),s("div",K,[a(U,{onClick:l},{default:t(()=>[c(" Cancelar ")]),_:1}),a(d,{class:v(["ml-3",{"opacity-25":o(e).processing}]),disabled:o(e).processing,onClick:i},{default:t(()=>[c(" Borrar Cuenta ")]),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}};export{S as default};
