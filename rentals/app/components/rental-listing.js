import Component from '@ember/component';

export default Component.extend({
  isWide: false,
  actions: {
    toggleImageSize() {
      //this.toggleProperty('isWide');
      let _isWide = this.get('isWide');
      this.set('isWide', !_isWide);
    }
  }
});
