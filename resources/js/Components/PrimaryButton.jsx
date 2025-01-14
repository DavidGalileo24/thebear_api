export default function PrimaryButton({
    className = '',
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `items-center rounded-lg border border-transparent bg-teal-950 px-3 py-1.5 text-md font-semibold text-white transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 ${
                    disabled && 'opacity-25'
                } ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
