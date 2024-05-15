import{Z as g,m as x,T as k,q as u,o as l,f as n,b as f,a as e,g as T,e as c,s as d,h as a,x as m,F as h,l as V,v as C,O as w,E as r,t as p,j as b}from"./app-e054b93f.js";import{_ as q}from"./AuthenticatedLayout-a68674ba.js";import{m as U}from"./datepicker.esm-ec433531.js";import{_ as I}from"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-ea7b971a.js";const M={data(){return{}},components:{AuthenticatedLayout:q,Head:g,Link:x,Datepicker:U},props:{usuarios:Object,errors:Object,user:Object},mounted(){this.getmimascara()},methods:{getmimascara(){$(document).ready(function(){$("#cl_ssn, #cy_ssn, #d1_ssn, #d2_ssn, #d3_ssn, #d4_ssn, #d5_ssn, #d6_ssn, #d7_ssn").mask("000-00-0000"),$("#telefono").mask("(000) 000-0000"),$("#cl_ingreso").mask("$000.000.000.000.000,00 $",{reverse:!0}),$("#comision").mask("000.000.000.000.000,00",{reverse:!0}),$("#cl_ruta").mask("000000000",{reverse:!0}),$("#cl_cuenta").mask("00000000000000000000",{reverse:!0})})}},setup(){const _=k({cl_nombres:null,cl_apellidos:null,cl_genero:null,cl_fechan:null,cl_direccion:null,cl_ciudad:null,cl_condado:null,cl_estado:null,cl_postal:null,cl_telefono:null,cl_email:null,cl_estatus:null,cl_ssn:null,cl_estadocivil:null,cy_nombres:null,cy_apellidos:null,cy_genero:null,cl_fechan:null,cy_estatus:null,cy_ssn:null,cl_ingreso:null,cl_banco:null,cl_ruta:null,cl_cuenta:null,cl_user_id:null,cl_dependientes:null,cl_acepta:null});function t(){w.post(route("record.store"),_)}return{form:_,submit:t}}},S=r('<div class="container d-flex justify-content-between"><div class=""><img class="logo-menu" src="/images/logo-horizontal.png" alt=""></div><div class="d-flex align-items-center me-4"><a class="btn btn-secondary" href="https://choicelifefg.com/"> Return </a></div></div>',1),P={class:"container mt-2"},A={class:"card"},N=e("div",{class:"card-header text-center"},[e("i",{class:"fa-solid fa-user-check me-2"}),e("span",{class:"fw-bold"},"REGISTRATION FORM")],-1),R={class:"card-body"},D={class:"container-fluid card py-4"},L=e("h4",{class:"text-center"},"Personal Information",-1),j=e("hr",null,null,-1),O={class:"row mt-4"},B={class:"col-12 col-md-4"},F=e("label",{for:"cl_nombres",class:"form-label"},"First Name:",-1),E={key:0},G=e("p",{class:"text-error"}," The Names field is required. ",-1),H=[G],z={class:"col-12 col-md-4"},Z=e("label",{for:"cl_apellidos",class:"form-label"},"Last Name:",-1),Y={key:0},Q=e("p",{class:"text-error"}," The Surnames field is required. ",-1),W=[Q],J={class:"col-12 col-md-4"},K=e("label",{for:"cl_genero",class:"form-label"},"Gender:",-1),X=e("option",{value:null},"select....",-1),ee=e("option",{value:"Femenino"},"Female",-1),oe=e("option",{value:"Masculino"},"Male",-1),te=[X,ee,oe],se={key:0},le=e("p",{class:"text-error"}," The Gender field is required. ",-1),ne=[le],ie={class:"row mt-4"},ae={class:"col-12 col-md-4"},ce=e("label",{for:"cl_fechan",class:"form-label"},"Birthdate:",-1),de={key:0},re=e("p",{class:"text-error"}," The Birthdate field is required. ",-1),_e=[re],me={class:"col-12 col-md-8"},ue=e("label",{for:"cl_direccion",class:"form-label"},"Address:",-1),fe={key:0},he=e("p",{class:"text-error"}," The Address field is required. ",-1),pe=[he],be={class:"row mt-4"},ve={class:"col-12 col-md-4"},ye=e("label",{for:"cl_ciudad",class:"form-label"},"City:",-1),ge={key:0},xe=e("p",{class:"text-error"}," The City field is required. ",-1),ke=[xe],Te={class:"col-12 col-md-4"},Ve=e("label",{for:"cl_condado",class:"form-label"},"County:",-1),Ce={key:0},we=e("p",{class:"text-error"}," The County field is required. ",-1),qe=[we],Ue={class:"col-12 col-md-4"},Ie=e("label",{for:"cl_estado",class:"form-label"},"State:",-1),Me={key:0},Se=e("p",{class:"text-error"}," The State field is required. ",-1),Pe=[Se],Ae={class:"row mt-4"},Ne={class:"col-12 col-md-3"},Re=e("label",{for:"cl_postal",class:"form-label"},"ZIP Code:",-1),De={key:0},Le=e("p",{class:"text-error"}," The ZIP Code field is required. ",-1),je=[Le],Oe={class:"col-12 col-md-3"},Be=e("label",{for:"telefono",class:"form-label"},"Phone:",-1),Fe={key:0},Ee=e("p",{class:"text-error"}," The Phone field is required. ",-1),Ge=[Ee],He={class:"col-12 col-md-6"},ze=e("label",{for:"cl_email",class:"form-label"},"Email:",-1),Ze={key:0},Ye=e("p",{class:"text-error"}," The Email field is required. ",-1),Qe=[Ye],We={class:"row mt-4"},Je={class:"col-12 col-md-4"},Ke=e("label",{for:"cl_estatus",class:"form-label"},"Legal status:",-1),Xe=r('<option>Select....</option><option value="Ciudadano">Citizen</option><option value="Residente">Resident</option><option value="Permiso de Trabajo">(PT) Work permit</option><option value="Solicitud de Asilo">Asylum Application</option><option value="Petición">Petition</option>',6),$e=[Xe],eo={key:0},oo=e("p",{class:"text-error"}," The Legal status field is required. ",-1),to=[oo],so={class:"col-12 col-md-4"},lo=e("label",{for:"cl_ssn",class:"form-label"},"SSN:",-1),no={key:0},io=e("p",{class:"text-error"}," The SSN field is required. ",-1),ao=[io],co={class:"container-fluid card py-4 mt-4"},ro=e("h4",{class:"text-center"},"Income Information",-1),_o=e("hr",null,null,-1),mo={class:"row mt-4"},uo={class:"col-12 col-md-4"},fo=e("label",{for:"cl_ingreso",class:"form-label"},"Annual Group Income in USD ($):",-1),ho={key:0},po=e("p",{class:"text-error"}," The Annual Group Income field is required. ",-1),bo=[po],vo={class:"col-12 col-md-4"},yo=e("label",{for:"cl_banco",class:"form-label"},"Name of the bank:",-1),go={key:0},xo=e("p",{class:"text-error"}," The Name of the bank field is required. ",-1),ko=[xo],To={class:"col-12 col-md-4"},Vo=e("label",{for:"cl_ruta",class:"form-label"},"Route:",-1),Co={key:0},wo=e("p",{class:"text-error"}," The Route field is required. ",-1),qo=[wo],Uo={class:"row mt-4"},Io={class:"col-12 col-md-4"},Mo=e("label",{for:"cl_cuenta",class:"form-label"},"Account number:",-1),So={key:0},Po=e("p",{class:"text-error"}," The Account number field is required. ",-1),Ao=[Po],No={class:"col-12 col-md-4"},Ro=e("label",{for:"cl_user_id",class:"form-label"},"Agent:",-1),Do=e("option",{value:null},"Selecciona....",-1),Lo=["value"],jo={key:0},Oo=e("p",{class:"text-error"}," You must select an agent ",-1),Bo=[Oo],Fo={class:"col-12 col-md-4"},Eo=e("a",{href:"!#","data-bs-toggle":"modal","data-bs-target":"#modalTerminos"}," Conditions and Terms ",-1),Go={class:"form-check"},Ho=e("label",{class:"form-check-label",for:"flexCheckDefault"}," Accept the conditions ",-1),zo={key:0},Zo=e("p",{class:"text-danger"},[b(" You must "),e("span",{class:"fw-bold"},"accept"),b(" the terms and conditions ")],-1),Yo=[Zo],Qo=r('<div class="container-fluid mt-4 text-center"><div class="d-grid"><div class="row"><a class="col-6 btn btn-secondary" href="https://starsseguros.com/"> Return </a><button type="submit" class="col-6 btn btn-primary">Next</button></div></div></div>',1),Wo=r('<div class="modal fade" id="modalTerminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h1 class="modal-title fs-5" id="exampleModalLabel">Conditions and Terms</h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><p> I give consent to <span class="fw-bold">starsseguros</span> to act as a health insurance broker for me and my entire household, if applicable. for purposes of enrollment in a Qualified Health Plan offered on the federally facilitated Marketplace. By consenting to this agreement, I authorize <span class="fw-bold">starsseguros</span> to view and use the confidential information provided by me in writing, electronically or by telephone only for one or more of the following: </p><ul class="lista"><li> Search for an existing Marketplace app. </li><li> Complete an application for eligibility and enrollment in a qualified Marketplace health plan or other government insurance affordability programs, such as Medicaid and CHIP or advance tax credits to help pay Marketplace premiums. </li><li> Provide ongoing account maintenance and enrollment assistance as needed. </li><li> Respond to Market queries about my application </li></ul><p> I understand that <span class="fw-bold">starsseguros</span> will not use or share my personally identifiable information (PII) for any purpose other than those listed above. Agent will ensure that my PII is kept private and secure by collecting, storing and using my PII for the purposes indicated above. </p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div>',1);function Jo(_,t,i,s,Ko,Xo){const v=u("Head"),y=u("datepicker");return l(),n(h,null,[f(v,{title:"Customer registration"}),S,e("div",P,[e("div",A,[N,e("div",R,[e("form",{onSubmit:t[19]||(t[19]=T((...o)=>s.submit&&s.submit(...o),["prevent"]))},[e("div",D,[L,j,e("div",O,[e("div",B,[F,c(e("input",{type:"text",class:"form-control",id:"cl_nombres","onUpdate:modelValue":t[0]||(t[0]=o=>s.form.cl_nombres=o)},null,512),[[d,s.form.cl_nombres]]),i.errors.cl_nombres?(l(),n("div",E,H)):a("",!0)]),e("div",z,[Z,c(e("input",{type:"text",class:"form-control",id:"cl_apellidos","onUpdate:modelValue":t[1]||(t[1]=o=>s.form.cl_apellidos=o)},null,512),[[d,s.form.cl_apellidos]]),i.errors.cl_apellidos?(l(),n("div",Y,W)):a("",!0)]),e("div",J,[K,c(e("select",{class:"form-select","aria-label":"Default select example",id:"cl_genero","onUpdate:modelValue":t[2]||(t[2]=o=>s.form.cl_genero=o)},te,512),[[m,s.form.cl_genero]]),i.errors.cl_genero?(l(),n("div",se,ne)):a("",!0)])]),e("div",ie,[e("div",ae,[ce,f(y,{class:"vuejs3-datepicker-form-control",language:"en","use-utc":"true",format:"dd/MMMM/yyyy","full-month-name":!0,id:"cl_fechan",modelValue:s.form.cl_fechan,"onUpdate:modelValue":t[3]||(t[3]=o=>s.form.cl_fechan=o)},null,8,["modelValue"]),i.errors.cl_fechan?(l(),n("div",de,_e)):a("",!0)]),e("div",me,[ue,c(e("input",{type:"text",class:"form-control",id:"cl_direccion","onUpdate:modelValue":t[4]||(t[4]=o=>s.form.cl_direccion=o)},null,512),[[d,s.form.cl_direccion]]),i.errors.cl_direccion?(l(),n("div",fe,pe)):a("",!0)])]),e("div",be,[e("div",ve,[ye,c(e("input",{type:"text",class:"form-control",id:"cl_ciudad","onUpdate:modelValue":t[5]||(t[5]=o=>s.form.cl_ciudad=o)},null,512),[[d,s.form.cl_ciudad]]),i.errors.cl_ciudad?(l(),n("div",ge,ke)):a("",!0)]),e("div",Te,[Ve,c(e("input",{type:"text",class:"form-control",id:"cl_condado","onUpdate:modelValue":t[6]||(t[6]=o=>s.form.cl_condado=o)},null,512),[[d,s.form.cl_condado]]),i.errors.cl_condado?(l(),n("div",Ce,qe)):a("",!0)]),e("div",Ue,[Ie,c(e("input",{type:"text",class:"form-control",id:"cl_estado","onUpdate:modelValue":t[7]||(t[7]=o=>s.form.cl_estado=o)},null,512),[[d,s.form.cl_estado]]),i.errors.cl_estado?(l(),n("div",Me,Pe)):a("",!0)])]),e("div",Ae,[e("div",Ne,[Re,c(e("input",{type:"text",class:"form-control",id:"cl_postal","onUpdate:modelValue":t[8]||(t[8]=o=>s.form.cl_postal=o)},null,512),[[d,s.form.cl_postal]]),i.errors.cl_postal?(l(),n("div",De,je)):a("",!0)]),e("div",Oe,[Be,c(e("input",{type:"text",class:"form-control",id:"telefono","onUpdate:modelValue":t[9]||(t[9]=o=>s.form.cl_telefono=o),placeholder:"(000) 000-0000",autocomplete:"off"},null,512),[[d,s.form.cl_telefono]]),i.errors.cl_telefono?(l(),n("div",Fe,Ge)):a("",!0)]),e("div",He,[ze,c(e("input",{type:"email",class:"form-control",id:"cl_email","onUpdate:modelValue":t[10]||(t[10]=o=>s.form.cl_email=o)},null,512),[[d,s.form.cl_email]]),i.errors.cl_email?(l(),n("div",Ze,Qe)):a("",!0)])]),e("div",We,[e("div",Je,[Ke,c(e("select",{class:"form-select","aria-label":"Default select example",id:"cl_estatus","onUpdate:modelValue":t[11]||(t[11]=o=>s.form.cl_estatus=o)},$e,512),[[m,s.form.cl_estatus]]),i.errors.cl_estatus?(l(),n("div",eo,to)):a("",!0)]),e("div",so,[lo,c(e("input",{type:"text",class:"form-control",id:"cl_ssn","onUpdate:modelValue":t[12]||(t[12]=o=>s.form.cl_ssn=o),placeholder:"000-00-0000",autocomplete:"off"},null,512),[[d,s.form.cl_ssn]]),i.errors.cl_ssn?(l(),n("div",no,ao)):a("",!0)])])]),e("div",co,[ro,_o,e("div",mo,[e("div",uo,[fo,c(e("input",{type:"text",class:"form-control",id:"cl_ingreso","onUpdate:modelValue":t[13]||(t[13]=o=>s.form.cl_ingreso=o)},null,512),[[d,s.form.cl_ingreso]]),i.errors.cl_ingreso?(l(),n("div",ho,bo)):a("",!0)]),e("div",vo,[yo,c(e("input",{type:"text",class:"form-control",id:"cl_banco","onUpdate:modelValue":t[14]||(t[14]=o=>s.form.cl_banco=o)},null,512),[[d,s.form.cl_banco]]),i.errors.cl_banco?(l(),n("div",go,ko)):a("",!0)]),e("div",To,[Vo,c(e("input",{type:"text",class:"form-control",id:"cl_ruta","onUpdate:modelValue":t[15]||(t[15]=o=>s.form.cl_ruta=o)},null,512),[[d,s.form.cl_ruta]]),i.errors.cl_ruta?(l(),n("div",Co,qo)):a("",!0)])]),e("div",Uo,[e("div",Io,[Mo,c(e("input",{type:"text",class:"form-control",id:"cl_cuenta","onUpdate:modelValue":t[16]||(t[16]=o=>s.form.cl_cuenta=o)},null,512),[[d,s.form.cl_cuenta]]),i.errors.cl_cuenta?(l(),n("div",So,Ao)):a("",!0)]),e("div",No,[Ro,c(e("select",{class:"form-select","aria-label":"Default select example",id:"cl_user_id","onUpdate:modelValue":t[17]||(t[17]=o=>s.form.cl_user_id=o)},[Do,(l(!0),n(h,null,V(i.usuarios,o=>(l(),n("option",{key:o.id,value:o.id},p(o.name)+" "+p(o.lastname),9,Lo))),128))],512),[[m,s.form.cl_user_id]]),i.errors.cl_user_id?(l(),n("div",jo,Bo)):a("",!0)]),e("div",Fo,[Eo,e("div",Go,[c(e("input",{class:"form-check-input",type:"checkbox",value:"acepto",id:"flexCheckDefault","onUpdate:modelValue":t[18]||(t[18]=o=>s.form.cl_acepta=o)},null,512),[[C,s.form.cl_acepta]]),Ho]),i.errors.cl_acepta?(l(),n("div",zo,Yo)):a("",!0)])])]),Qo],32)])])]),Wo],64)}const lt=I(M,[["render",Jo]]);export{lt as default};
