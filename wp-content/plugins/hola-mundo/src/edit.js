/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit(props) {
	let test_id = props.test;

	let test_data = /* fetch(test_id) */[
		{
			'pregunta': '¿Cuanto es 1+1?',
			'respuestas': [
				'1',
				'2',
				'3',
			]
		},
		{
			'pregunta': '¿De qué color es el cielo?',
			'respuestas': [
				'azul',
				'negro',
				'amarillo',
			]
		}
	];

	return (
		<>
		{
			test_data.map(item => (
				<div>
					<p>{item.pregunta}</p>
					{
						item.respuestas.map(rpta => (
							<p><input type="radio" name="rpta"></input> {rpta}</p>
						))
					}
				</div>
			))
		}
		</>
	);
}
