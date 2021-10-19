module.exports = {
    publicPath: process.env.NODE_ENV === 'production'
    ? '/wp-content/plugins/wp-vue3-plugin/dist'
    : '/',    
    filenameHashing: false,
}
