import './bootstrap';
import Alpine from 'alpinejs';
import hljs from 'highlight.js';
// import 'highlight.js/styles/a11y-dark.css'
import persist from '@alpinejs/persist'

window.Alpine = Alpine
window.Alpine.plugin(persist)

window.addEventListener('alpine:init', () => {
    window.Alpine.directive('component', (el, {value}, {Alpine}) => {

        Alpine.data('component', () => ({
            tab: 'preview',
            component: null,
            codeComponent: null,
            isCopied: false,
            previewbutton: {
                ['@click'](){
                    this.tab='preview'
                },
                [':data-active'](){
                    return this.tab==='preview'
                }
            },
            codebutton: {
                ['@click'](){
                    this.tab='code'
                },
                [':data-active'](){
                    return this.tab==='code'
                }
            },
            preview: {
                ['x-show'](){
                    return this.tab==='preview'
                },
                ['x-init'](){
                    this.component = this.$el
                }
            },
            code: {
                ['x-show'](){
                    return this.tab==='code'
                },
                ['x-init'](){
                    const pre = document.createElement("pre");
                    const code = document.createElement("code")
                    code.innerText = this.component.innerHTML;
                    this.codeComponent = code.innerText
                    code.innerHTML = hljs.highlight(this.component.innerHTML, {language: 'html'}).value
                    pre.append(code)
                    this.$el.appendChild(pre);
                }
            },
            copy: {
                ['@click'](){
                    navigator.clipboard.writeText(this.codeComponent)
                },
                ['@mousedown'](){
                    this.isCopied =true;
                },
                ['@mouseup'](){
                    this.isCopied = false
                },
            },
            copied: {
                // ['x-show'](){
                //     console.log(this.isCopied)
                //     return this.isCopied;
                // },
                [':data-copied'](){
                    return this.isCopied;
                }
            }
        }))

        if(value===null){
            el.setAttribute('x-data', 'component');
        }

        if(value==='preview-button'){
            el.setAttribute('x-bind', 'previewbutton');
        }

        if(value==='code-button'){
            el.setAttribute('x-bind', 'codebutton');
        }

        if(value==='code'){
            el.setAttribute('x-bind', 'code');
        }

        if(value==='preview'){
            el.setAttribute('x-bind', 'preview');
        }

        if(value==='copy'){
            el.setAttribute('x-bind', 'copy');
        }

        if(value==='copied'){
            el.setAttribute('x-bind', 'copied');
        }
        //     x-component:preview
        //     x-component:code
        //     x-component:copy
        // console.log(el)
    })

    Alpine.store('darkMode', {
        init() {
            this.on = window.matchMedia('(prefers-color-scheme: dark)').matches
        },
        on: Alpine.$persist(true).as('darkMode_on'),
        toggle() {
            this.on = !this.on;
        }
    });
})

window.Alpine.start()
