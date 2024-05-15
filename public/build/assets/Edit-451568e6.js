import{Z as y,m as x,T as k,q as u,o as i,f as l,b as _,w as f,F as g,O as w,a as o,j as h,t as r,g as V,e as d,s as c,h as m}from"./app-e054b93f.js";import{_ as D}from"./AuthenticatedLayout-a68674ba.js";import{m as N}from"./datepicker.esm-ec433531.js";import{_ as L}from"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-ea7b971a.js";const E={data(){return{}},components:{AuthenticatedLayout:D,Head:y,Link:x,Datepicker:N},props:{usuario:Object,errors:Object},mounted(){this.getmimascara()},methods:{getmimascara(){$(document).ready(function(){$("#phone").mask("(000) 000-0000")})}},setup(a){const t=k({id:a.usuario.id,name:a.usuario.name,lastname:a.usuario.lastname,phone:a.usuario.phone,npn:a.usuario.npn});function e(){w.put(route("usuarios.update",t.id),t)}return{form:t,submit:e}}},A={class:"card"},O={class:"card-header"},T=o("i",{class:"fa-solid fa-user-check"},null,-1),U={class:"card-body"},j={class:"container-fluid"},B={class:"row"},C={class:"col-12 col-md-6 col-lg-4"},H=o("label",{for:"name",class:"form-label"},"Nombres:",-1),F={key:0},M={class:"text-error"},S={class:"col-12 col-md-6 col-lg-4"},q=o("label",{for:"lastname",class:"form-label"},"Apellidos:",-1),P={key:0},R={class:"text-error"},Z={class:"row mt-4"},z={class:"col-12 col-md-6 col-lg-4"},G=o("label",{for:"phone",class:"form-label"},"Teléfono:",-1),I={key:0},J={class:"text-error"},K={class:"col-12 col-md-6 col-lg-4"},Q=o("label",{for:"npn",class:"form-label"},"NPN:",-1),W={key:0},X={class:"text-error"},Y={class:"container-fluid mt-4 text-center"},oo={class:"d-grid"},to={class:"row"},eo=o("button",{type:"submit",class:"col-6 btn btn-primary"},"Enviar",-1);function so(a,t,e,s,no,ao){const p=u("Head"),b=u("Link"),v=u("AuthenticatedLayout");return i(),l(g,null,[_(p,{title:"Edit Datos Dependiente"}),_(v,null,{default:f(()=>[o("div",A,[o("div",O,[T,h(" Editar Datos del Dependiente de: "),o("span",null,r(e.usuario.name)+" "+r(e.usuario.lastname),1)]),o("div",U,[o("form",{onSubmit:t[4]||(t[4]=V((...n)=>s.submit&&s.submit(...n),["prevent"]))},[o("div",j,[o("div",B,[o("div",C,[H,d(o("input",{type:"text",class:"form-control",id:"name","onUpdate:modelValue":t[0]||(t[0]=n=>s.form.name=n)},null,512),[[c,s.form.name]]),e.errors.name?(i(),l("div",F,[o("p",M,r(e.errors.name),1)])):m("",!0)]),o("div",S,[q,d(o("input",{type:"text",class:"form-control",id:"lastname","onUpdate:modelValue":t[1]||(t[1]=n=>s.form.lastname=n)},null,512),[[c,s.form.lastname]]),e.errors.lastname?(i(),l("div",P,[o("p",R,r(e.errors.lastname),1)])):m("",!0)])]),o("div",Z,[o("div",z,[G,d(o("input",{type:"text",class:"form-control",id:"phone","onUpdate:modelValue":t[2]||(t[2]=n=>s.form.phone=n)},null,512),[[c,s.form.phone]]),e.errors.phone?(i(),l("div",I,[o("p",J,r(e.errors.phone),1)])):m("",!0)]),o("div",K,[Q,d(o("input",{type:"text",class:"form-control",id:"npn","onUpdate:modelValue":t[3]||(t[3]=n=>s.form.npn=n)},null,512),[[c,s.form.npn]]),e.errors.npn?(i(),l("div",W,[o("p",X,r(e.errors.npn),1)])):m("",!0)])])]),o("div",Y,[o("div",oo,[o("div",to,[eo,_(b,{class:"col-6 btn btn-secondary",href:a.route("usuarios.show",e.usuario.id)},{default:f(()=>[h(" Regresar ")]),_:1},8,["href"])])])])],32)])])]),_:1})],64)}const uo=L(E,[["render",so]]);export{uo as default};
