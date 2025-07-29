# WP‑Base Theme

**A WordPress theme scaffold built with Tailwind CSS & Vite** — designed for local dev environments and modern frontend tooling.

---

## 🚀 Features

- WordPress-compatible theme structure: `assets/`, `inc/`, `template-parts/`, etc.
- Tailwind CSS for utility-first styling
- Built using Vite for fast bundling and HMR
- Modern JavaScript tooling: `npm`, PostCSS, and optional Composer support

---

## 📦 Getting Started

### Prerequisites

- PHP (version 7+)
- WordPress installed locally (e.g. via LocalWP, Valet, Lando)
- Node.js & npm installed

### Installation / Setup

```bash
# Inside your project folder
npm install
```

Update your development environment:
- Check and adjust `vite.config.mjs` or `package.json` if proxy is needed
- Make sure `.env.local` or tailoring files are ignored via `.gitignore`

### Development

```bash
npm run dev
```

This will start Vite’s dev server with CSS/JS hot‑reload. WordPress templates and PHP changes reload as usual.

### Build for Production

```bash
npm run build
```

This outputs optimized CSS/JS into your `dist/` folder (ignored in Git).

---

## 🔧 Project Structure

```
├── assets/          # Theme assets (styles, scripts)
├── dist/            # Build output (ignored)
├── inc/             # Theme PHP includes
├── template-parts/  # WordPress template files
├── package.json
├── tailwind.config.js
├── vite.config.mjs
└── README.md
```

---

## ✅ What to Commit

✅ Keep:
- `package.json`, Tailwind/Vite config, theme PHP files
- Templates, assets, custom logic files

❌ Ignore (via `.gitignore`):
- `node_modules/`
- `dist/`
- `.devcontainer/`
- `.env*`
- OS-level files like `.DS_Store`

---

## 🙋 Other Commands

You can add these to your `package.json` under `"scripts"`:

```json
{
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "watch": "vite --watch"
  }
}
```

---

## 🧑‍🤝‍🧑 Contribution & License

Feel free to fork, submit issues, or send pull requests.

Licensed under **MIT** *(if applicable—for publication via themes repo or open source)*.

---

## 📞 Contact

- **Author:** mamjad00
- **Repo:** [github.com/mamjad00/wp-base](https://github.com/mamjad00/wp-base)
