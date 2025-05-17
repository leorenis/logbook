## esbuild
An extremely fast bundler for the web.
Our current build tools for the web are 10-100x slower than they could be. The main goal of the esbuild bundler project is to bring about a new era of build tool performance, and create an easy-to-use modern bundler along the way.

Major features:

- Extreme speed without needing a cache
- JavaScript, CSS, TypeScript, and JSX built-in
- A straightforward API for CLI, JS, and Go
- Bundles ESM and CommonJS modules
- Bundles CSS including CSS modules
- Tree shaking, minification, and source maps
- Local server, watch mode, and plugins

### Install esbuild
First, download and install the esbuild command locally. A prebuilt native executable can be installed using npm (which is automatically installed when you install the node JavaScript runtime):

```zsh
npm install --save-exact --save-dev esbuild
```

This should have installed esbuild in your local node_modules folder. You can run the esbuild executable to verify that everything is working correctly:

```zsh
./node_modules/.bin/esbuild --version
```

Your first bundle: https://esbuild.github.io/getting-started/#your-first-bundle

### See more

- [Docs](https://esbuild.github.io/)
- [Install](https://esbuild.github.io/getting-started/#install-esbuild)
- [esbuild GitHub](https://github.com/evanw/esbuild)