## vite: The Build Tool for the Web
Vite is a blazing fast frontend build tool powering the next generation of web applications.
Is a build tool that aims to provide a faster and leaner development experience for modern web projects. It consists of two major parts:
- A dev server that [provides rich feature enhancements](https://vite.dev/guide/features.html) over [native ES modules](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules), for example extremely fast [Hot Module Replacement (HMR)](https://vite.dev/guide/features.html#hot-module-replacement).
- A build command that bundles your code with [Rollup](https://rollupjs.org/), pre-configured to output highly optimized static assets for production.

Vite is opinionated and comes with sensible defaults out of the box. Read about what's possible in the [Features Guide](https://vite.dev/guide/features.html). Support for frameworks or integration with other tools is possible through [Plugins](https://vite.dev/guide/using-plugins.html). The [Config Section](https://vite.dev/config/) explains how to adapt Vite to your project if needed.

### Scaffolding Your First Vite Project
First, download and install the esbuild command locally. A prebuilt native executable can be installed using npm (which is automatically installed when you install the node JavaScript runtime):

<details>
<summary>Compatibility Note</summary>

Vite requires `Node.js` version `18+` or `20+`. However, some templates require a higher `Node.js` version to work, please upgrade if your package manager warns about it.
</details>

```
npm install -D vite
```
Continue in: https://vite.dev/guide/


### See more

- [Docs](https://vite.dev/guide/)
- [esbuild GitHub](https://github.com/vitejs/vite)