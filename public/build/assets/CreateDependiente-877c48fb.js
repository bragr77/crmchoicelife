import{Z as g,m as x,T as k,q as p,o as n,f as i,b as u,a as e,j as f,t as d,g as S,e as a,s as c,h as r,x as _,w as V,F as D,O as N,E as h}from"./app-e054b93f.js";import{_ as j}from"./AuthenticatedLayout-a68674ba.js";import{m as w}from"./datepicker.esm-ec433531.js";import{_ as M}from"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-ea7b971a.js";const A={data(){return{}},components:{AuthenticatedLayout:j,Head:g,Link:x,Datepicker:w},props:{cliente:Object,errors:Object},mounted(){this.getmimascara()},methods:{getmimascara(){$(document).ready(function(){$("#dp_ssn").mask("000-00-0000")})}},setup(m){const o=k({id:m.cliente.id,dp_clienteid:null,dp_nombres:null,dp_apellidos:null,dp_genero:null,dp_fechan:null,dp_relacion:null,dp_estatus:null,dp_ssn:null,dp_cobertura:null});function t(){N.post(route("registrocliente.storedependiente",o.id),o)}return{form:o,submit:t}}},U=e("div",{class:"container d-flex justify-content-between"},[e("div",{class:""},[e("img",{class:"logo-menu",src:"/images/logo-horizontal.png",alt:""})])],-1),C={class:"container mt-4"},H={class:"card"},P={class:"card-header"},F=e("i",{class:"fa-solid fa-user-check me-2"},null,-1),L=e("span",{class:"fw-bolder"},"Agregar Dependiente para:",-1),T={class:"card-body"},O=e("h4",{class:"text-center"},"Información del Dependiente",-1),R=e("hr",null,null,-1),B={class:"row mt-4"},E={class:"col-12 col-md-4"},q=e("label",{for:"cy_nombres",class:"form-label"},"Nombres:",-1),z={key:0},G={class:"text-error"},I={class:"col-12 col-md-4"},Z=e("label",{for:"dp_apellidos",class:"form-label"},"Apellidos:",-1),J={key:0},K={class:"text-error"},Q={class:"col-12 col-md-4"},W=e("label",{for:"dp_genero",class:"form-label"},"Genero:",-1),X=e("option",{value:null},"Selecciona....",-1),Y=e("option",{value:"Femenino"},"Femenino",-1),ee=e("option",{value:"Masculino"},"Masculino",-1),oe=[X,Y,ee],te={key:0},se={class:"text-error"},le={class:"row mt-4"},ne={class:"col-12 col-md-4"},ie=e("label",{for:"dp_fechan",class:"form-label"},"Fecha de Nacimiento",-1),de={key:0},ae={class:"text-error"},re={class:"col-12 col-md-4"},ce=e("label",{for:"dp_relacion",class:"form-label"},"Relacion:",-1),_e=h('<option>Selecciona....</option><option value="Padre">Padre</option><option value="Madre">Madre</option><option value="Hijo">Hijo</option><option value="Hija">Hija</option><option value="Abuelo">Abuelo</option><option value="Abuela">Abuela</option><option value="Nieto">Nieto</option><option value="Nieta">Nieta</option><option value="Sobrino">Sobrino</option><option value="Sobrina">Sobrina</option>',11),me=[_e],pe={key:0},ue={class:"text-error"},fe={class:"col-12 col-md-4"},he=e("label",{for:"dp_estatus",class:"form-label"},"Estatus Legal:",-1),be=h('<option>Selecciona....</option><option value="Ciudadano">Ciudadano</option><option value="Residente">Residente</option><option value="Permiso de Trabajo">Permiso de Trabajo</option><option value="Solicitud de Asilo">Solicitud de Asilo</option><option value="Petición">Petición</option>',6),ve=[be],ye={key:0},ge={class:"text-error"},xe={class:"row mt-4"},ke={class:"col-12 col-md-4"},Se=e("label",{for:"dp_ssn",class:"form-label"},"Nro. Seguro Social:",-1),Ve={key:0},De={class:"text-error"},Ne={class:"col-12 col-md-4"},je=e("label",{for:"dp_cobertura",class:"form-label"},"Cobertura:",-1),we=e("option",{value:null},"Selecciona....",-1),Me=e("option",{value:"si"},"Si",-1),Ae=e("option",{value:"no"},"No",-1),Ue=[we,Me,Ae],Ce={key:0},He=e("p",{class:"text-error"}," Debe seleccionar una opción ",-1),Pe=[He],Fe={class:"container-fluid mt-4 text-center"},Le={class:"d-grid"},Te={class:"row"},Oe=e("button",{type:"submit",class:"col-6 btn btn-primary"},"Siguiente",-1);function Re(m,o,t,s,Be,Ee){const b=p("Head"),v=p("datepicker"),y=p("Link");return n(),i(D,null,[u(b,{title:"Agregar Dependientes"}),U,e("div",C,[e("div",H,[e("div",P,[F,L,f(" "+d(t.cliente.nombres)+" "+d(t.cliente.apellidos),1)]),e("div",T,[e("form",{onSubmit:o[9]||(o[9]=S((...l)=>s.submit&&s.submit(...l),["prevent"]))},[O,R,a(e("input",{type:"text",class:"form-control",id:"cy_cliente_id",valued:"{{ cliente.id }}","onUpdate:modelValue":o[0]||(o[0]=l=>s.form.cy_cliente_id=l),style:{visibility:"hidden"}},null,512),[[c,s.form.cy_cliente_id]]),e("div",B,[e("div",E,[q,a(e("input",{type:"text",class:"form-control",id:"cy_nombres","onUpdate:modelValue":o[1]||(o[1]=l=>s.form.dp_nombres=l)},null,512),[[c,s.form.dp_nombres]]),t.errors.dp_nombres?(n(),i("div",z,[e("p",G,d(t.errors.dp_nombres),1)])):r("",!0)]),e("div",I,[Z,a(e("input",{type:"text",class:"form-control",id:"dp_apellidos","onUpdate:modelValue":o[2]||(o[2]=l=>s.form.dp_apellidos=l)},null,512),[[c,s.form.dp_apellidos]]),t.errors.dp_apellidos?(n(),i("div",J,[e("p",K,d(t.errors.dp_apellidos),1)])):r("",!0)]),e("div",Q,[W,a(e("select",{class:"form-select","aria-label":"Default select example",id:"dp_genero","onUpdate:modelValue":o[3]||(o[3]=l=>s.form.dp_genero=l)},oe,512),[[_,s.form.dp_genero]]),t.errors.dp_genero?(n(),i("div",te,[e("p",se,d(t.errors.dp_genero),1)])):r("",!0)])]),e("div",le,[e("div",ne,[ie,u(v,{class:"vuejs3-datepicker-form-control",language:"es","use-utc":"true",format:"dd/MMMM/yyyy","full-month-name":!0,id:"dp_fechan",modelValue:s.form.dp_fechan,"onUpdate:modelValue":o[4]||(o[4]=l=>s.form.dp_fechan=l)},null,8,["modelValue"]),t.errors.dp_fechan?(n(),i("div",de,[e("p",ae,d(t.errors.dp_fechan),1)])):r("",!0)]),e("div",re,[ce,a(e("select",{class:"form-select","aria-label":"Default select example",id:"dp_relacion","onUpdate:modelValue":o[5]||(o[5]=l=>s.form.dp_relacion=l)},me,512),[[_,s.form.dp_relacion]]),t.errors.dp_relacion?(n(),i("div",pe,[e("p",ue,d(t.errors.dp_relacion),1)])):r("",!0)]),e("div",fe,[he,a(e("select",{class:"form-select","aria-label":"Default select example",id:"dp_estatus","onUpdate:modelValue":o[6]||(o[6]=l=>s.form.dp_estatus=l)},ve,512),[[_,s.form.dp_estatus]]),t.errors.dp_estatus?(n(),i("div",ye,[e("p",ge,d(t.errors.dp_estatus),1)])):r("",!0)])]),e("div",xe,[e("div",ke,[Se,a(e("input",{type:"text",class:"form-control",id:"dp_ssn","onUpdate:modelValue":o[7]||(o[7]=l=>s.form.dp_ssn=l),placeholder:"000-00-0000",autocomplete:"off"},null,512),[[c,s.form.dp_ssn]]),t.errors.dp_ssn?(n(),i("div",Ve,[e("p",De,d(t.errors.dp_ssn),1)])):r("",!0)]),e("div",Ne,[je,a(e("select",{class:"form-select","aria-label":"Default select example",id:"dp_cobertura","onUpdate:modelValue":o[8]||(o[8]=l=>s.form.dp_cobertura=l)},Ue,512),[[_,s.form.dp_cobertura]]),t.errors.dp_cobertura?(n(),i("div",Ce,Pe)):r("",!0)])]),e("div",Fe,[e("div",Le,[e("div",Te,[u(y,{class:"col-6 btn btn-secondary",href:m.route("registrocliente.show",t.cliente.id)},{default:V(()=>[f(" Regresar ")]),_:1},8,["href"]),Oe])])])],32)])])])],64)}const Je=M(A,[["render",Re]]);export{Je as default};
