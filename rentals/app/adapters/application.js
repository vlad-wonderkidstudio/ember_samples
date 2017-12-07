import DS from 'ember-data';

//export default DS.JSONAPIAdapter.extend({
export default DS.RESTAdapter.extend({
  namespace: 'admin_panel/ember_samples/rentals_yii/yii2-advanced-api/api/web/rental',
  host: 'http://ember.loc'
});
