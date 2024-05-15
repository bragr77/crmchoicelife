import{Z as g,m as x,T as k,q as m,o as r,f as i,b as u,w as f,F as p,O as w,a as t,g as C,e as c,s as l,t as d,h as _,j as h}from"./app-e054b93f.js";import{_ as V}from"./AuthenticatedLayout-a68674ba.js";import{m as E}from"./datepicker.esm-ec433531.js";import{_ as F}from"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-ea7b971a.js";const L={data(){return{}},components:{AuthenticatedLayout:V,Head:g,Link:x,Datepicker:E},props:{cliente:Object,errors:Object},mounted(){this.getmimascara()},methods:{getmimascara(){$(document).ready(function(){$("#ingreso").mask("$000.000.000.000.000,00 $",{reverse:!0}),$("#ruta").mask("000000000",{reverse:!0}),$("#cuenta").mask("00000000000000000000",{reverse:!0})})}},setup(a){const e=k({id:a.cliente.id,ingreso:a.cliente.ingreso,banco:a.cliente.banco,ruta:a.cliente.ruta,cuenta:a.cliente.cuenta});function o(){w.put(route("updatefinanzas.update",e.id),e)}return{form:e,submit:o}}},z={class:"card"},N=t("div",{class:"card-header"},[t("i",{class:"fa-solid fa-user-check"}),h(" Editar Finanzas del Cliente ")],-1),U={class:"card-body"},A={class:"container-fluid card py-4 mt-4"},B=t("h4",{class:"text-center"},"Información de Ingresos",-1),D=t("hr",null,null,-1),O={class:"row mt-4"},j={class:"col-12 col-md-4"},H=t("label",{for:"ingreso",class:"form-label"},"Ingreso Grupal Anual en USD($):",-1),I={key:0},S={class:"text-error"},T={class:"col-12 col-md-4"},M=t("label",{for:"banco",class:"form-label"},"Banco:",-1),R={key:0},q={class:"text-error"},G={class:"col-12 col-md-4"},Z=t("label",{for:"ruta",class:"form-label"},"Ruta:",-1),J={key:0},K={class:"text-error"},P={class:"row mt-4"},Q={class:"col-12 col-md-4"},W=t("label",{for:"cuenta",class:"form-label"},"Nro. de Cuenta:",-1),X={key:0},Y={class:"text-error"},tt={class:"container-fluid mt-4 text-center"},et={class:"d-grid"},ot={class:"row"},st=t("button",{type:"submit",class:"col-6 btn btn-primary"},"Enviar",-1);function nt(a,e,o,s,at,rt){const b=m("Head"),v=m("Link"),y=m("AuthenticatedLayout");return r(),i(p,null,[u(b,{title:"Edit Finanzas Clientes"}),u(y,null,{default:f(()=>[t("div",z,[N,t("div",U,[t("form",{onSubmit:e[4]||(e[4]=C((...n)=>s.submit&&s.submit(...n),["prevent"]))},[t("div",A,[B,D,t("div",O,[t("div",j,[H,c(t("input",{type:"text",class:"form-control",id:"ingreso","onUpdate:modelValue":e[0]||(e[0]=n=>s.form.ingreso=n)},null,512),[[l,s.form.ingreso]]),o.errors.ingreso?(r(),i("div",I,[t("p",S,d(o.errors.ingreso),1)])):_("",!0)]),t("div",T,[M,c(t("input",{type:"text",class:"form-control",id:"banco","onUpdate:modelValue":e[1]||(e[1]=n=>s.form.banco=n)},null,512),[[l,s.form.banco]]),o.errors.banco?(r(),i("div",R,[t("p",q,d(o.errors.banco),1)])):_("",!0)]),t("div",G,[Z,c(t("input",{type:"text",class:"form-control",id:"ruta","onUpdate:modelValue":e[2]||(e[2]=n=>s.form.ruta=n)},null,512),[[l,s.form.ruta]]),o.errors.ruta?(r(),i("div",J,[t("p",K,d(o.errors.ruta),1)])):_("",!0)])]),t("div",P,[t("div",Q,[W,c(t("input",{type:"text",class:"form-control",id:"cuenta","onUpdate:modelValue":e[3]||(e[3]=n=>s.form.cuenta=n)},null,512),[[l,s.form.cuenta]]),o.errors.cuenta?(r(),i("div",X,[t("p",Y,d(o.errors.cuenta),1)])):_("",!0)])])]),t("div",tt,[t("div",et,[t("div",ot,[st,u(v,{class:"col-6 btn btn-secondary",href:a.route("clientes.show",o.cliente.id)},{default:f(()=>[h(" Regresar ")]),_:1},8,["href"])])])])],32)])])]),_:1})],64)}const mt=F(L,[["render",nt]]);export{mt as default};
