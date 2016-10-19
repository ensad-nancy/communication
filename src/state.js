const state = (function () {
  return {

    archive: {
      elements: []
    },
    yearbook: {
      elements: []
    },
    source: {
      elements: []
    },
    about: {
      raw: ''
    },
    reseau: {
      raw: ''
    },
    ui: {
      navbar: true,
      menu: [
        {uri: '/about', label: 'about'},
        {uri: '/archive', label: 'archive'},
        {uri: '/yearbook', label: 'yearbook'},
        {uri: '/reseau', label: 'réseau'},
        {uri: '/source', label: 'source'},
        {uri: '/random', label: 'random'}
      ],
      iconPacks: ['vani'],
      currentIconPack: 0
    }
  }
}())

export default state
