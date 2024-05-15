import{_ as M,a as v,b as C,c as h}from"./ResponsiveNavLink-ea7b971a.js";import{m as w,i as $,q as m,o as r,f as l,a as e,b as i,w as s,j as n,h as c,e as p,y as _,E as L,t as g,c as B,A as y,k as f,G as N,F as z,r as x}from"./app-e054b93f.js";import{_ as T}from"./_plugin-vue_export-helper-c27b6911.js";const j={components:{NavLink:M,Link:w},setup(){return{showingTwoLevelMenu:$(!1)}}},D={class:"z-20 hidden w-64 overflow-y-auto bg-white lg:block flex-shrink-0"},A={class:"py-4 text-gray-500"},S=e("div",{class:"row"},[e("img",{class:"logo-dashboard ms-4",src:"/images/logo.png",alt:""}),n(" Choicelife ")],-1),V={class:"mt-6"},E={class:"relative px-6 py-3"},H=e("svg",{class:"w-5 h-5","aria-hidden":"true",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})],-1),R={class:"relative px-6 py-3"},F=e("i",{class:"fa-solid fa-address-card"},null,-1),I={key:0,class:"relative px-6 py-3"},q=e("i",{class:"fa-regular fa-address-card"},null,-1),G={key:1,class:"relative px-6 py-3"},P=e("i",{class:"fa-solid fa-restroom"},null,-1),U={key:2,class:"relative px-6 py-3"},J=e("i",{class:"fa-solid fa-children"},null,-1),K={key:3,class:"relative px-6 py-3"},O=L('<span class="inline-flex items-center"><i class="fa-solid fa-print"></i><span class="ml-4">Reportes</span></span><svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>',2),Q=[O],W={class:"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900","aria-label":"submenu"},X={class:"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"},Y=e("i",{class:"fa-solid fa-file-excel me-2"},null,-1),Z=["href"];function ee(o,t,a,d,b,Ie){const k=m("Link"),u=m("NavLink");return r(),l("aside",D,[e("div",A,[i(k,{class:"row subrayado ml-6 text-lg font-bold text-gray-800 order-border-dark",href:o.route("dashboard.index")},{default:s(()=>[S]),_:1},8,["href"]),e("ul",V,[e("li",E,[i(u,{href:o.route("dashboard.index"),active:o.route().current("dashboard.index")},{icon:s(()=>[H]),default:s(()=>[n(" Dashboard ")]),_:1},8,["href","active"])]),e("li",R,[i(u,{href:o.route("clientes.index"),active:o.route().current("clientes.index")},{icon:s(()=>[F]),default:s(()=>[n(" Clientes Activos ")]),_:1},8,["href","active"])]),o.$page.props.auth.user.role_id!=3?(r(),l("li",I,[i(u,{href:o.route("clientinactivo.index"),active:o.route().current("clientinactivo.index")},{icon:s(()=>[q]),default:s(()=>[n(" Clientes Inactivos ")]),_:1},8,["href","active"])])):c("",!0),o.$page.props.auth.user.role_id!=3?(r(),l("li",G,[i(u,{href:o.route("conyugues.index"),active:o.route().current("conyugues.index")},{icon:s(()=>[P]),default:s(()=>[n(" Buscar Conyugues ")]),_:1},8,["href","active"])])):c("",!0),o.$page.props.auth.user.role_id!=3?(r(),l("li",U,[i(u,{href:o.route("dependientes.index"),active:o.route().current("dependientes.index")},{icon:s(()=>[J]),default:s(()=>[n(" Buscar Dependientes ")]),_:1},8,["href","active"])])):c("",!0),o.$page.props.auth.user.role_id!=3?(r(),l("li",K,[e("button",{onClick:t[0]||(t[0]=qe=>d.showingTwoLevelMenu=!d.showingTwoLevelMenu),class:"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800","aria-haspopup":"true"},Q),p(e("ul",W,[e("li",X,[Y,e("a",{class:"subrayado w-full",href:o.route("excel.report")},"Clientes Excel",8,Z)])],512),[[_,d.showingTwoLevelMenu]])])):c("",!0)])])])}const se=T(j,[["render",ee]]),te={class:"z-10 py-4 bg-white shadow-md"},oe={class:"container flex justify-between items-center px-6 mx-auto h-full text-purple-600 lg:justify-end"},ae=e("svg",{class:"w-6 h-6","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 20 20"},[e("path",{"fill-rule":"evenodd",d:"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z","clip-rule":"evenodd"})],-1),ie=[ae],ne={class:"align-middle rounded-full focus:shadow-outline-purple focus:outline-none","aria-label":"Account","aria-haspopup":"true"},re=e("i",{class:"fa-solid fa-caret-down ms-2"},null,-1),le=e("i",{class:"fa-solid fa-users me-2"},null,-1),de=e("i",{class:"fa-solid fa-gear me-2"},null,-1),ce=e("i",{class:"fa-solid fa-right-from-bracket me-2"},null,-1),ue={__name:"TopMenu",setup(o){return(t,a)=>(r(),l("header",te,[e("div",oe,[e("button",{onClick:a[0]||(a[0]=d=>t.$page.props.showingMobileMenu=!t.$page.props.showingMobileMenu),class:"p-1 mr-5 -ml-1 rounded-md lg:hidden focus:outline-none focus:shadow-outline-purple","aria-label":"Menu"},ie),i(C,null,{trigger:s(()=>[e("button",ne,[n(g(t.$page.props.auth.user.name)+" "+g(t.$page.props.auth.user.lastname),1),re])]),content:s(()=>[t.$page.props.auth.user.role_id!=3?(r(),B(v,{key:0,href:t.route("usuarios.index")},{icon:s(()=>[le,n(" Usuarios ")]),_:1},8,["href"])):c("",!0),i(v,{href:t.route("profile.edit")},{icon:s(()=>[de,n(" Perfil ")]),_:1},8,["href"]),i(v,{href:t.route("logout"),method:"post",as:"button"},{icon:s(()=>[ce,n(" Cerrar Sesión ")]),_:1},8,["href"])]),_:1})])]))}},he={class:"fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"},fe={class:"fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white lg:hidden"},pe={class:"py-4 text-gray-500 dark:text-gray-400"},_e=e("div",{class:"row"},[e("img",{class:"logo-dashboard ms-4",src:"/images/logo.png",alt:""}),n(" Choicelife ")],-1),ve={class:"mt-6"},me={class:"relative px-6 py-3"},ge=e("svg",{class:"w-5 h-5","aria-hidden":"true",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})],-1),ye={class:"relative px-6 py-3"},xe=e("i",{class:"fa-solid fa-address-card"},null,-1),we={class:"relative px-6 py-3"},$e=e("i",{class:"fa-solid fa-address-card"},null,-1),be={class:"relative px-6 py-3"},ke=e("i",{class:"fa-solid fa-restroom"},null,-1),Me={class:"relative px-6 py-3"},Ce=e("i",{class:"fa-solid fa-children"},null,-1),Le={key:0,class:"relative px-6 py-3"},Be=e("span",{class:"inline-flex items-center"},[e("i",{class:"fa-solid fa-print"}),e("span",{class:"ml-4"},"Reportes")],-1),Ne=e("svg",{class:"w-4 h-4","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 20 20"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),ze=[Be,Ne],Te={class:"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900","aria-label":"submenu"},je={class:"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"},De=e("i",{class:"fa-solid fa-file-excel me-2"},null,-1),Ae=["href"],Se={__name:"NavigationMobile",setup(o){let t=$(!1);return(a,d)=>(r(),l(z,null,[i(y,{"enter-active-class":"transition ease-in-out duration-150","enter-from-class":"opacity-0","enter-to-class":"opacity-100","leave-active-class":"transition ease-in-out duration-150","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:s(()=>[p(e("div",he,null,512),[[_,a.$page.props.showingMobileMenu]])]),_:1}),i(y,{"enter-active-class":"transition ease-in-out duration-150","enter-from-class":"opacity-0 transform -translate-x-20","enter-to-class":"opacity-100","leave-active-class":"transition ease-in-out duration-150","leave-from-class":"opacity-100","leave-to-class":"opacity-0 transform -translate-x-20"},{default:s(()=>[p(e("aside",fe,[e("div",pe,[i(f(w),{class:"row subrayado ml-6 text-lg font-bold text-gray-800",href:a.route("dashboard.index")},{default:s(()=>[_e]),_:1},8,["href"]),e("ul",ve,[e("li",me,[i(h,{href:a.route("dashboard.index"),active:a.route().current("dashboard.index")},{icon:s(()=>[ge]),default:s(()=>[n(" Dashboard ")]),_:1},8,["href","active"])]),e("li",ye,[i(h,{href:a.route("clientes.index"),active:a.route().current("clientes.index")},{icon:s(()=>[xe]),default:s(()=>[n(" Clientes Activos ")]),_:1},8,["href","active"])]),e("li",we,[i(h,{href:a.route("clientinactivo.index"),active:a.route().current("clientinactivo.index")},{icon:s(()=>[$e]),default:s(()=>[n(" Clientes Inactivos ")]),_:1},8,["href","active"])]),e("li",be,[i(h,{href:a.route("conyugues.index"),active:a.route().current("conyugues.index")},{icon:s(()=>[ke]),default:s(()=>[n(" Buscar Conyugues ")]),_:1},8,["href","active"])]),e("li",Me,[i(h,{href:a.route("dependientes.index"),active:a.route().current("dependientes.index")},{icon:s(()=>[Ce]),default:s(()=>[n(" Buscar Dependientes ")]),_:1},8,["href","active"])]),a.$page.props.auth.user.role_id!=3?(r(),l("li",Le,[e("button",{onClick:d[0]||(d[0]=b=>N(t)?t.value=!f(t):t=!f(t)),class:"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800","aria-haspopup":"true"},ze),p(e("ul",Te,[e("li",je,[De,e("a",{class:"subrayado w-full",href:a.route("excel.report")},"Clientes Excel",8,Ae)])],512),[[_,f(t)]])])):c("",!0)])])],512),[[_,a.$page.props.showingMobileMenu]])]),_:1})],64))}},Ve={class:"flex h-screen bg-gray-50"},Ee={class:"flex flex-col flex-1 w-full"},He={class:"h-full overflow-y-auto mx-4"},Re={class:"container-fluid px-16 mx-auto"},Fe={class:"my-6 text-2xl font-semibold text-gray-700"},Je={__name:"AuthenticatedLayout",setup(o){return(t,a)=>(r(),l("div",null,[e("div",Ve,[i(se),i(Se),e("div",Ee,[i(ue),e("main",He,[e("div",Re,[e("h2",Fe,[x(t.$slots,"header")]),x(t.$slots,"default")])])])])]))}};export{Je as _};
