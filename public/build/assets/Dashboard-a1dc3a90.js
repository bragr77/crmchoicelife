import{_ as h}from"./AuthenticatedLayout-a68674ba.js";import{Z as u,q as d,o,f as c,b as i,w as m,F as n,a as s,t as e,h as l,l as v,j as f}from"./app-e054b93f.js";import{_ as y}from"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-ea7b971a.js";const b={data(){return{}},components:{AuthenticatedLayout:h,Head:u},props:{users:Object,user:Object,clientecount:"",totalclientes:""},methods:{}},x={class:"container-fluid"},g={class:"row"},p={key:0,class:"col-12 col-md-6 col-xl-4"},w={class:"card mb-3",style:{"max-width":"540px"}},C={class:"row g-0"},k={class:"col-9"},A={class:"card-body ms-2"},j=s("h5",{class:"card-title card-title-color"},"Total Clientes ChoiceLife:",-1),L=s("div",{class:"col-3 d-flex align-items-center justify-content-center"},[s("span",{class:"icon-card-home"},[s("i",{class:"fa-solid fa-users"})])],-1),D={key:1,class:"col-12 col-md-6 col-xl-4"},N={class:"card mb-3",style:{"max-width":"540px"}},V={class:"row g-0"},B={class:"col-9"},H={class:"card-body ms-2"},F={class:"card-title card-title-color"},O=s("div",{class:"col-3 d-flex align-items-center justify-content-center"},[s("span",{class:"icon-card-home"},[s("i",{class:"fa-solid fa-users"})])],-1),T={key:0,class:"row"},q={class:"col-12 col-lg-6"},E={class:"card"},I=s("div",{class:"card-header"},[s("i",{class:"fa-solid fa-user-shield"}),f(" Agentes ")],-1),R={class:"card-body"},S={class:"table-responsive"},Z={id:"cliente",class:"table table-hover"},z=s("thead",null,[s("tr",null,[s("th",{scope:"col"},"Id Agente"),s("th",{scope:"col"},"Agente"),s("th",{scope:"col"},"Clientes Registrados")])],-1),G={class:""};function J(K,M,t,P,Q,U){const _=d("Head"),r=d("AuthenticatedLayout");return o(),c(n,null,[i(_,{title:"Dashboard"}),i(r,null,{default:m(()=>[s("div",x,[s("div",g,[t.user.role_id!=3?(o(),c("div",p,[s("div",w,[s("div",C,[s("div",k,[s("div",A,[j,s("h4",null,e(t.totalclientes),1)])]),L])])])):l("",!0),t.user.role_id==3?(o(),c("div",D,[s("div",N,[s("div",V,[s("div",B,[s("div",H,[s("h5",F,"Clientes de "+e(t.user.name)+" "+e(t.user.lastname)+":",1),s("h4",null,e(t.clientecount),1)])]),O])])])):l("",!0)]),t.user.role_id!=3?(o(),c("div",T,[s("div",q,[s("div",E,[I,s("div",R,[s("div",S,[s("table",Z,[z,s("tbody",G,[(o(!0),c(n,null,v(t.users,a=>(o(),c("tr",{key:a.id},[s("td",null,e(a.id),1),s("td",null,e(a.name),1),s("td",null,e(a.clientes_count),1)]))),128))])])])])])])])):l("",!0)])]),_:1})],64)}const ss=y(b,[["render",J]]);export{ss as default};
